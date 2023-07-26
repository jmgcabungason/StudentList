<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function register(){
        return view('students.register');
    }

    public function registerStudent(Request $request){
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ]);

        $newStudent = Student::create($data);

        return redirect(route('students.index'));
    }

    public function edit(Student $student){
        return view('students.edit', ['student' => $student]);
    }

    public function update(Student $student, Request $request){
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ]);

        $student->update($data);

        return redirect(route('students.index'))->with('success', 'Updated Successfully');
    }

    public function delete(Student $student){
        $student->delete();
        
        return redirect(route('students.index'))->with('success', 'Deleted Successfully');

    }
}

