<?php

namespace App\Http\Controllers\Headmaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function calender()
    {
        return view('headmaster.pages.calender');
    }

    public function statistik()
    {
        return view('headmaster.pages.statistik');
    }

    public function class()
    {
        return view('headmaster.pages.class');
    }
}
