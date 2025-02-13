<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showdata()
    {
        $data = Category::paginate(3);

        return view('admin.category.showdata', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)

    {
        $input = $request->all();

        $request->validate([
            'category' => 'required',
            'icon' => 'required',

        ]);

        // $request['status'] = 1;


        Category::create($input);
        return redirect('admin/category')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {

        $data = Category::find($id);

        return view('admin.category.edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $request->validate([
            
            'category' => 'required',
            'icon' => 'required',
        ]);
        
        $data = Category::find($request->id);
        $data['category'] = $request->category;
        $data['icon'] = $request->icon;

        $data->save();
        return redirect('admin/category')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = category::find($id);
        if (isset($data)) {
            $data->delete();
            return redirect('admin/category')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
