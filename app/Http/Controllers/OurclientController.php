<?php

namespace App\Http\Controllers;

use App\Models\Ourclient;
use Illuminate\Http\Request;

class OurclientController extends Controller
{
    public function index()
    {
        $data = Ourclient::find(1);

        return view('admin.ourclient.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Ourclient::find(1);
        $request->validate([
            'title' => 'required ',
            'heading' => 'required',
           
           
        ]);
       
        $data['title'] = $request->title;
        $data['heading'] = $request->heading;
       
       
        $data->save();
        return redirect('admin/ourclient/');
    }
}
