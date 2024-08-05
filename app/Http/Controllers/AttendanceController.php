<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
class AttendanceController extends Controller
{
    public function store(Request $request, $id)
    {
        $attendance = new Attendance();
        $attendance->user_id = $id;
        $attendance->check_in_time = Carbon::now();
        $attendance->date = Carbon::today();
        $attendance->save();

        return redirect()->back()->with('success', 'Attendance taken successfully');
    }
}
