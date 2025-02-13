<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function showdata()
    {
        $data = Team::paginate(2);
        return view('admin.team.showdata', ['data' => $data]);
    }
    public function create()
    {
        return view('admin.team.create');
    }
    public function store(Request $request)

    {
        $input = $request->all();


        $request->validate([
            'name' => 'required | min:3 |max:20',
            'post' => 'required | max:20',
            'image' => 'required |mimes:jpeg,png,jpg',
        ]);

        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('team', $imageName);
        $input['image'] = $imageName;

        Team::create($input);
        return redirect('admin/team/')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {
        $data = Team::find($id);
        return view('admin.team.edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Team::find($request->id);
        $request->validate([
            'name' => 'required | min:3 |max:20',
            'post' => 'required | max:20',
        ]);
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/team/' . $data->image))) {
                unlink(public_path('storage/team/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('team', $imageName);

            request()->image->move(public_path('image/team/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['post'] = $request->post;
        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/team/')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = Team::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/team/' . $data->image))) {
                unlink(public_path('storage/team/' . $data->image));
            }
            $data->delete();
            return redirect('admin/team/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
