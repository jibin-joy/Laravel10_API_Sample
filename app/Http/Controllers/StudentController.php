<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        $data = [
            'status' => 200,
            'student' =>$student
        ];
        return response()->json($data,200);
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();

        $data =
        [
            'status' => 200,
            'message' => 'data deleted Successfully'

        ];
        return response()->json($data,200);
    }
}
