<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\student;


class StudentController extends Controller
{
    //student mange view
    public function student_manage()
    {
        $student_data = Student::latest()->paginate(4);
    	return view('pages.student_manage', compact('student_data'));
    }

    //student mange view
    public function studentAdd()
    {
    	return view('pages.studentAdd');
    }

    //student Register form
    public function studentRegister(Request $request)
    {
        $request->validate([
            'cns' => 'required|min:3|max:255',
            'first_name' => 'required|min:2|max:255',        
            'last_name' => 'required|min:3|max:255',
            'age' => 'required|max:5',
            'speciality' => 'required|min:3|max:255',
        ]);

        
        Student::insert([
            'cns' =>$request->cns,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'speciality' => $request->speciality,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'Student Data Successfully Inserted');
    }

    // Edit student data
    public function edit_student(Request $request, $id)
    {
        $find_student_data = Student::find($id);

        if($find_student_data)
        {
            return view('pages.edit_student', compact('find_student_data'));
        }else
        {
            return abort(404);
        }
    }

    // Update Student Route
    public function update_student(Request $request)
    {
        $update_st_data = Student::FindOrFail($request->id)->update([
           'cns' =>  $request->cns,
           'first_name' => $request->first_name,
           'last_name' =>  $request->last_name,
           'age' =>   $request->age,
           'speciality' =>  $request->speciality,
       ]);

        $request->validate([
            'cns' => 'required|min:3|max:255',
            'first_name' => 'required|min:2|max:255',        
            'last_name' => 'required|min:3|max:255',
            'age' => 'required|max:5',
            'speciality' => 'required|min:3|max:255',
        ]);

        return Redirect()->back()->with('success', 'Student Data Successfully Updated');
    }

    // delete student data
    public function delete_student($id)
    {
        $del_student = Student::FindOrFail($id);

        $del_student->delete();
        return Redirect()->back()->with('success', 'Student Data Successfully Deleted');
    }

}
