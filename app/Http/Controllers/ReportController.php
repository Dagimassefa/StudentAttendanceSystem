<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ReportController extends Controller
{
public function showUsersList()
{
    $users = \DB::table('users')->select('id', 'name', 'email', 'phone_number', 'created_at')->get();

    return view('users-list', ['users' => $users]);
}
  public function dailyReport()
    {
        $today = Carbon::today();
        $report = DB::table('attendance')
            ->whereDate('check_in_time', $today)
            ->get();
        return view('daily-report', ['report' => $report]);
    }

    public function weeklyReport()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $report = DB::table('attendance')
            ->whereBetween('check_in_time', [$startOfWeek, $endOfWeek])
            ->get();
        return view('weekly-report', ['report' => $report]);
    }

    public function monthlyReport()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $report = DB::table('attendance')
            ->whereBetween('check_in_time', [$startOfMonth, $endOfMonth])
            ->get();
        return view('monthly-report', ['report' => $report]);
    }

    public function yearlyReport()
    {
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();
        $report = DB::table('attendance')
            ->whereBetween('check_in_time', [$startOfYear, $endOfYear])
            ->get();
        return view('yearly-report', ['report' => $report]);
    }
}
