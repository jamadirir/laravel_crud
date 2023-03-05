<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function studentLists(){
        $data=Students::get();
        return view('student-lists',compact('data'));
    }


    public function studentForm(){
        return view('student-form');
    }


    public function addNewStudent(Request $request){
        $Students=$request->validate([
            'name'=> 'required',
            'email'=>'required | email',
            'phone'=>'required',
            'address'=>'required'
        ]);
       Students::create($Students);
       return redirect()->back()->with('success','Account Created Successfully');
    }

    public function editStudent($id){
        $data=Students::where('id','=',$id)->first();
        return view('edit-student',compact('data'));
    }

    public function updateStudent(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'phone'=>'required',
            'address'=>'required'
        ]);
        $id=$request->id;
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address;

        Students::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,

        ]);

        return redirect()->back()->with('success','Record Updated Successfully');
    }


    public function deleteStudent($id){
        Students::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Record Deleted Successfully');

    }


}
