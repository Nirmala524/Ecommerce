<?php

namespace App\Http\Controllers;

use App\Models\Multiimage;
use Illuminate\Http\Request;

class MultiimageController extends Controller
{
    public function index()
    {
        $data = Multiimage::all();
        return view('admin.multiimage.index', compact('data'));
    }
    public function create()
    {
        return view('admin.multiimage.create');
    }
    public function store(Request $request)

    {
        $input = $request->all();


        $request->validate([
            'image' => 'required |mimes:jpeg,png,jpg',
        ]);

        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('multiimage', $imageName);
        $input['image'] = $imageName;

        Multiimage::create($input);
        return redirect('admin/multiimage/')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {
        $data = Multiimage::find($id);
        return view('admin.multiimage.edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
       
        $data = Multiimage::find($request->id);
        // dd($data);
        
        $image = $request->file('image');


        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/multiimage/' . $data->image))) {
                unlink(public_path('storage/multiimage/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('multiimage', $imageName);

            request()->image->move(public_path('image/multiimage/'), $imageName);
            $data['image'] = $imageName;
        }
        
        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/multiimage/')->with('status', 'Recored Updated Successfuly!');
    }

   
    public function destroy($id)
    {

        // dd($id);
        $data = Multiimage::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/multiimage/' . $data->image))) {
                unlink(public_path('storage/multiimage/' . $data->image));
            }
            $data->delete();
            return redirect('admin/multiimage/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
