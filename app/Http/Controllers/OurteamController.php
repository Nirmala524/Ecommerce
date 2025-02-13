<?php

namespace App\Http\Controllers;

use App\Models\Ourteam;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function index()
    {
        $data = Ourteam::find(1);

        return view('admin.ourteam.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Ourteam::find(1);
        $request->validate([
            'title' => 'required ',
            'heading' => 'required',
           
           
        ]);
       
        $data['title'] = $request->title;
        $data['heading'] = $request->heading;
       
       
        $data->save();
        return redirect('admin/ourteam/');
    }
}
