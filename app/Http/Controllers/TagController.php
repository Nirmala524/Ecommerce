<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function showdata()
    {
        $data = Tag::all();

        return view('admin.tags.showdata', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }
    public function store(Request $request)

    {

        $request->validate([
            'tag' => 'required',
            
        ]);

        // $request['status'] = 1;

        Tag::create($request->all());
        return redirect('admin/tag')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {

        $data = Tag::find($id);

        return view('admin.tags.edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $request->validate([
           
            'tag' => 'required',
                    ]);


        $data = Tag::find($request->id);
        $data['tag'] = $request->tag;
       
        $data->save();
        return redirect('admin/tag')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = Tag::find($id);
        if (isset($data)) {
            $data->delete();
            return redirect('admin/tag')->with('delete', 'Recored Deleted Successfuly!');
        }
        else{
            return "record not found";
        }
    }
}
