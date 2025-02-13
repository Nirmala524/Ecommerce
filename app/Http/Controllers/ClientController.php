<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $data = Client::paginate(4);
        return view('admin.testimonial.showdata', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();


        $request->validate([
            'name' => 'required | min:3 |max:20 ',
            'place' => 'required | max:30',
            'star' => 'required | max:5',
            'desc' => 'required |max :300',
            'image' => 'required |mimes:jpeg,png,jpg',




        ]);

        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('client', $imageName);
        // request()->image->move(public_path('image/team/'), $imageName);
        $input['image'] = $imageName;

        Client::create($input);
        return redirect('admin/testimonial/')->with('status', 'Recored  Created Successfuly!');
    }


    public function edit($id)
    {
        $data = Client::find($id);
        return view('admin.testimonial.edit', ['data' => $data]);
    }


    public function update(Request $request)
    {
        $data = Client::find($request->id);
        $request->validate([
            'name' => 'required | min:3 |max:20 ',
            'place' => 'required | max:30',
            'star' => 'required | max:5',
            'desc' => 'required |max :300',

        ]);
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/client/' . $data->image))) {
                unlink(public_path('storage/client/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('client', $imageName);

            request()->image->move(public_path('image/client/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['place'] = $request->place;
        $data['star'] = $request->star;
        $data['desc'] = $request->desc;

        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/testimonial/')->with('status', 'Recored Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Client::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/client/' . $data->image))) {
                unlink(public_path('storage/client/' . $data->image));
            }
            $data->delete();
            return redirect('admin/testimonial/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
