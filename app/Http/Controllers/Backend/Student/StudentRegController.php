<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentRegController extends Controller
{
    public function StudentRegView(){
    	//$data['years'] = StudentYear::all();
    	//$data['classes'] = StudentClass::all();

    	//$data['year_id'] = StudentYear::orderBy('id','desc')->first()->id;
    	//$data['class_id'] = StudentClass::orderBy('id','desc')->first()->id;
    	// dd($data['class_id']);
    	//$data['allData'] = AssignStudent::where('year_id',$data['year_id'])->where('class_id',$data['class_id'])->get();
    	//return view('backend.student.student_reg.student_view',$data);

    }
}
