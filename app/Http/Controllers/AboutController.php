<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::find(1);

        return view('admin.about.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = About::find(1);
        $request->validate([
            'title' => 'required ',
            'heading' => 'required',
            'desc' => 'required',
           
        ]);
       
        $data['title'] = $request->title;
        $data['heading'] = $request->heading;
        $data['desc'] = $request->desc;
       
        $data->save();
        return redirect('admin/about/');
    }

}
