<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class GenerateQR extends Controller
{
        public function showQrCodeForm()
    {
        return view('generateQrCode');
    }
      public function registerStudent(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'email_address' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $student = new User();
        $student->name = $validated['full_name'];
        $student->phone_number = $validated['phone_number'];
        $student->email = $validated['email_address'];
        $student->password = Hash::make($validated['password']);
        $student->save();
           $url = url("/read-qr/{$student->id}");

    // Generate the QR code with the URL
    $qrCode = QrCode::size(200)->generate($url);
   return view('generateQrCode', compact('qrCode'));
    }
    public function ReadQrCode($id)
{
    $student = User::findOrFail($id);
    return view('studentID', compact('student'));
}
}
