<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $data = Setting::find(1);

        return view('admin.setting', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = setting::find(1);
        $request->validate([
            'email' => 'required ',
            'contact' => 'required',
            'desc' => 'required',
            'work' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'map' => 'required',
        ]);
        $darkimage = $request->file('darkimage');


        if (isset($request->darkimage)) {
            $request->validate([
                'darkimage' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/setting/' . $data->darkimage))) {
                unlink(public_path('storage/setting/' . $data->darkimage));
            }

            $imageName = time() . '.' . $darkimage->getClientOriginalExtension();
            $darkimage->storeAs('setting', $imageName);

            request()->darkimage->move(public_path('image/setting/'), $imageName);
            $data['darkimage'] = $imageName;
        }
        $lightimage = $request->file('lightimage');

        if (isset($request->lightimage)) {
            $request->validate([
                'lightimage' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/setting/' . $data->lightimage))) {
                unlink(public_path('storage/setting/' . $data->lightimage));
            }

            $NewimageName = time() . '.' . $lightimage->getClientOriginalExtension();
            $lightimage->storeAs('setting', $NewimageName);

            request()->lightimage->move(public_path('image/setting/'), $NewimageName);
            $data['lightimage'] = $NewimageName;
        }
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['desc'] = $request->desc;
        $data['work'] = $request->work;
        $data['facebook'] = $request->facebook;
        $data['youtube'] = $request->youtube;
        $data['twitter'] = $request->twitter;
        $data['instagram'] = $request->instagram;
        $data['map'] = $request->map;

        $data->save();
        return redirect('admin/setting');
    }

}
