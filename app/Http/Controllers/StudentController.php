<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;

class StudentController extends Controller
{
    public function insertform(){
        return view('stud_create');
    }

    public function insert(Request $request){
        $std_name = $request->input('std_name');
        $std_email = $request->input('std_email');
        $std_password = $request->input('std_password');
        $std_class = $request->input('std_class');
        $std_faculty = $request->input('std_faculty');
        
    }


public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'std_name' => 'required',
        'std_email' => 'required',
        'std_password' => 'required',
        'std_class' => 'required',
        'std_faculty' => 'required',
    ]);
 
    
 
    return redirect('/register');
}
}
