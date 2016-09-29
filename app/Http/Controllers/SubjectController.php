<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::where('subject_status', 1)->get();
        return view('academics.subjects', array(
            'subjects' => $subjects
        ));
    }
}
