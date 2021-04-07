<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashbord()
    {
        return view('student.pages.overview');
    }

    public function transkipNilai()
    {
        return view('student.pages.transkip-nilai');
    }
}
