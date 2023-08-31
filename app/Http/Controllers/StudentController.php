<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(student $student)
    {
        $allStudent = $student->paginate(5);
        return view("student.student", compact("allStudent"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.addStudent");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, student $student)
    {
        $request->validate([
            'sname' => 'required | min:03 | regex:/^[A-Za-z. ]*$/'
        ], [
            'sname.required' => 'Please provide the student name',
            'sname.min' => 'The name is very small',
            'sname.regex' => 'Invalid name format',
        ]);

        $student->name = $request->sname;
        $student->save();

        $msg = $request->sname . " added successfully";

        return redirect()->back()->with("smsg", $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view("student.showStudent", compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view("student.editStudent", compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $request->validate([
            "sname" => "required | min:5 | regex:/^[A-Za-z. ]*$/"
        ], [
            'sname.required' => 'Please provide the student name',
            'sname.min' => 'The name is very small',
            'sname.regex' => 'Invalid name format',
        ]);
        $student->name = $request->sname;
        $student->save();

        $msg = $request->sname . " Uppdated successfully";

        return redirect()->back()->with("smsg", $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student->delete();
        $msg = $student->name . " Deleted successfully";
        return redirect()->back()->with("smsg", $msg);
    }
}
