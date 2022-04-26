<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardCalendarController extends Controller
{
    public function index()
    {
        return view('dashboard.calendars.index', [
            'schedules' => Schedule::all(),
        ]);
    }
}
