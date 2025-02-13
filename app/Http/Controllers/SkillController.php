<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function showdata(){
        $data=Skill::paginate(3);
        return view('admin.skill.showdata',['data'=>$data]);
    }
    public function create(){
        return view('admin.skill.create');
    }
    public function store(Request $request)

    {

        $request->validate([
            'title' => 'required | min:5 | max:100',
            'per' => 'required',
            


        ]);

        $request['status'] = 1;

        Skill::create($request->all());
        return redirect('admin/skill/')->with('status', 'Recored  Created Successfuly!');

    }

    public function edit($id)
    {

        $data = Skill::find($id);

        return view('admin.skill.edit', ['data' => $data]);
    }


    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required | min:5 | max:100',
            'per' => 'required',


        ]);


        $data = Skill::find($request->id);
        $data['title'] = $request->title;
        $data['per'] = $request->per;
        $data['status'] =isset( $request->status)?1:0;
        $data->save();
        return redirect('admin/skill/')->with('status', 'Recored Updated Successfuly!');
    }

    public function destory($id)
    {

        $data = Skill::find($id);
        if (isset($data)) {
            $data->delete();
            return redirect('admin/skill/')->with('delete', 'Recored Deleted Successfuly!');
        }
        else{
            return "record not found";
        }
    }
}
