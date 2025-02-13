<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class SliderCntroller extends Controller
{
    // public function create()
    // {
    //     return view('admin.create');
    // }

    public function adddata()
    {
        $data = Slider::paginate(2);
        return view('admin.slider.data-table', ['data' => $data]);
    }
    public function create()
    {
        $data = Slider::all();
        return view('admin.slider.create');
    }

    public function store(Request $request)

    {
        $input = $request->all();

        $request->validate([
            'title' => 'required | min:3 | max:100',
            'image' => 'required | mimes:jpeg,png,jpg',
        ]);


        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
       
        $destinationPathThumbnail = public_path('image/slider/');
        $img = Image::read($image->path());
        $img->resize(1920, 700, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPathThumbnail.'/'.$imageName);
     

        // $imageName = time() . '.' . request()->image->getClientOriginalExtension();

        // request()->image->move(public_path('image/slider'), $imageName);
        $input['image'] = $imageName;
        Slider::create($input);
        return redirect('admin/slider/')->with('status', 'Recored Created Successfuly!');
    }
    public function edit($id)
    {

        $data = Slider::find($id);

        return view('admin.slider.edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Slider::find($request->id);
        $request->validate([
            'title' => 'required | min:10 | max:100',
        ]);

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('image/slider/' . $data->image))) {
                unlink(public_path( 'image/slider/' . $data->image));
            }

            $imageName = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('image/slider/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['title'] = $request->title;
        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/slider/')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = Slider::find($id);
        if (isset($data)) {

            if (file_exists(public_path( 'image/slider/' . $data->image))) {
                unlink(public_path( 'image/slider/' . $data->image));
            }
            $data->delete();
            return redirect('admin/slider/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }

    
}
