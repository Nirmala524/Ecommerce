<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showdata()
    {
        $data = Product::paginate(1);

        return view('admin.product.showdata', ['data' => $data]);
    }


    public function create()
    {
        $cat = Category::all();
        $tags = Tag::all();

        return view('admin.product.create', ['cat' => $cat, 'tags' => $tags]);
    }
    public function store(Request $request)

    {
        $input = $request->all();
        $request->validate([
            'name' => 'required | min:3 ',
            'title' => 'required | min:5 | max:100',
            'price' => 'required',
            'thumbnail' => 'required',
            'image.*' => 'required| mimes:jpeg,png,jpg,avif,webp',
            'desc' => 'required',
            'category' => 'required',
            'tag' => 'required',
        ]);

        $input['status'] = 1;

        $thumbnail = $request->file('thumbnail');
        $singleimage = time() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('image/product'), $singleimage);
        $input['thumbnail'] = $singleimage;


        if ($files = $request->file('image')) {
            $images = array();

            foreach ($files as $file) {
                $imageName = str()->random(5) . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('image/product'), $imageName);

                $images[] = $imageName;
            }
        }

        $input['image'] = json_encode($images);
        $input['tag']=json_encode($request->tag);
        Product::create($input);
        return redirect('admin/product')->with('status', 'Recored  Created Successfuly!');

       

    }

    public function edit($id)
    {

        $data = Product::find($id);
        $cat = Category::all();
        $tags = Tag::all();


        return view('admin.product.edit', ['data' => $data, 'cat' => $cat, 'tags' => $tags]);
    }
    public function update(Request $request)
    {
        $data = Product::find($request->id);

        $request->validate([
            'name' => 'required | min:3 ',
            'title' => 'required | min:5 | max:100',
            'price' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'image.*' => 'required| mimes:jpeg,png,jpg,avif,webp',



        ]);

        if (isset($request->thumbnail)) {
            $request->validate([
                'thumbnail' => 'required | mimes:jpeg,png,jpg,gif,svg,avif',

            ]);
            if (file_exists(public_path('image/product/' . $data->thumbnail))) {
                unlink(public_path( 'image/product/' . $data->thumbnail));
            }

            $thumbimage = time() . '.' . request()->thumbnail->getClientOriginalExtension();

            request()->thumbnail->move(public_path('image/product/'), $thumbimage);
            $data['thumbnail'] = $thumbimage;
        }


        if (isset($request->image)) {
            $files = $request->file('image');
            $images = array();
            $oldimages = $data->image;
            $decodeimages = json_decode($oldimages);
            foreach ($decodeimages as $oldimage) {

                if (file_exists(public_path('image/product/' . $oldimage))) {
                    unlink(public_path('image/product/' . $oldimage));
                }
            }
            foreach ($files as $value) {
                $imageName = str()->random(5) . time() . '.' . $value->getClientOriginalExtension();

                $value->move(public_path('image/product'), $imageName);

                $images[] = $imageName;
            }
        }

        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['price'] = $request->price;
        $data['image'] = json_encode($images);
        $data['desc'] = $request->desc;
        $data['category'] = $request->category;
        $data['tag'] = $request->tag;

        $data['status'] = isset($request->status) ? 1 : 0;
        $data->save();
        return redirect('admin/product')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = Product::find($id);

        if (isset($data)) {
            foreach (json_decode($data->image) as $oldimage) {


                if (file_exists(public_path('image/product/' . $oldimage))) {
                    unlink(public_path('image/product/' . $oldimage));
                }
            }
            $data->delete();
            return redirect('admin/product')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
