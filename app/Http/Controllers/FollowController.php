<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function index()
    {
        $data = Follow::find(1);

        return view('admin.follow.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Follow::find(1);
        $request->validate([
            'title' => 'required ',
            'heading' => 'required',
           
           
        ]);
       
        $data['title'] = $request->title;
        $data['heading'] = $request->heading;
       
       
        $data->save();
        return redirect('admin/follow/');
    } 
}
