<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index (){
        return view ('dashboard.all');
    }

    public function kelas()
    {
        $kelas = Kelas::all();

        return view('dashboard.kelas', [
            'title' => 'Daftar Kelas',
            'kelas' => $kelas,
        ]);
    }   

    public function student (){
        $students = Student::all(); 
    
        return view ('dashboard.student', [
            'students' => $students, 
        ]);       
}
public function about(){
    return view ('dashboard.about');
}

public function showdetail($student)
    {
        return view('dashboard.detail', ["title" => "Student Detail", "student" => Student::find($student)]);
    }
}