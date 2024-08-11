<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use App\Mail\AttendanceNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AttendanceController extends Controller
{
    public function store(Request $request, $id)
    {
        // Record attendance
        $attendance = new Attendance();
        $attendance->user_id = $id;
        $attendance->check_in_time = Carbon::now();
        $attendance->date = Carbon::today();
        $attendance->save();

        // Retrieve the user by ID
        $user = User::findOrFail($id);

        // Log email sending attempt
        Log::info('Attempting to send attendance notification email to user:', ['user_id' => $user->id, 'email' => $user->email]);

        // Send attendance notification email
        try {
            Mail::to($user->email)->send(new AttendanceNotification($user));
            Log::info('Attendance notification email sent successfully to user:', ['user_id' => $user->id, 'email' => $user->email]);
        } catch (\Exception $e) {
            Log::error('Failed to send attendance notification email:', ['error' => $e->getMessage()]);
            dd($e->getMessage()); // Add this to see the error immediately
        }

        return redirect()->back()->with('success', 'Attendance taken and email sent successfully');
    }
}
