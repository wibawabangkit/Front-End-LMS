<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function calendar()
    {
        return view('teacher.pages.calendar');
    }

    public function overviewTeacher()
    {
        return view('teacher.pages.overview-teacher');
    }

    public function overviewClass()
    {
        return view('teacher.pages.overview-class');
    }
}
