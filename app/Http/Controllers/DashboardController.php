<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use Carbon\Carbon;

class DashboardController extends Controller
{

public function index()
{
    
    $totalStudents = User::where('role', 'student')->count();

    $totalTeachers = User::where('role', 'teacher')->count();

    $yesterday = Carbon::yesterday();
    $averageDailyAttendance = Attendance::whereDate('created_at', $yesterday)->count();

    $lastWeek = Carbon::now()->subDays(7);
    $averageWeeklyAttendance = Attendance::whereDate('created_at', '>=', $lastWeek)->count();

    $today = Carbon::today();
    $attendanceToday = Attendance::whereDate('created_at', $today)->count();

    $startOfMonth = Carbon::now()->startOfMonth();
    $attendanceMonth = Attendance::whereDate('created_at', '>=', $startOfMonth)->count();

    $startOfQuarter = Carbon::now()->startOfQuarter();
    $attendanceQuarter = Attendance::whereDate('created_at', '>=', $startOfQuarter)->count();

    $startOfYear = Carbon::now()->startOfYear();
    $attendanceYear = Attendance::whereDate('created_at', '>=', $startOfYear)->count();

    $monthlyStudentData = User::where('role', 'student')
        ->selectRaw('COUNT(*) as count, MONTH(created_at) as month')
        ->groupBy('month')
        ->pluck('count', 'month')
        ->all();

    $monthlyTeacherData = User::where('role', 'teacher')
        ->selectRaw('COUNT(*) as count, MONTH(created_at) as month')
        ->groupBy('month')
        ->pluck('count', 'month')
        ->all();

    $monthlyAttendanceData = Attendance::selectRaw('COUNT(*) as count, MONTH(date) as month')
        ->groupBy('month')
        ->pluck('count', 'month')
        ->all();

    $months = range(1, 12);
    $monthlyStudentData = array_replace(array_fill_keys($months, 0), $monthlyStudentData);
    $monthlyTeacherData = array_replace(array_fill_keys($months, 0), $monthlyTeacherData);
    $monthlyAttendanceData = array_replace(array_fill_keys($months, 0), $monthlyAttendanceData);


    $recentStudents = User::where('role', 'student')
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

    return view('dashboard', compact(
        'totalStudents',
        'totalTeachers',
        'averageDailyAttendance',
        'averageWeeklyAttendance',
        'attendanceToday',
        'attendanceMonth',
        'attendanceQuarter',
        'attendanceYear',
        'monthlyStudentData',
        'monthlyTeacherData',
        'monthlyAttendanceData',
        'recentStudents'
    ));
}
   public function showProfile()
    {
      
        $user = Auth::user();

        return view('profile-page', compact('user'));
    }

}
