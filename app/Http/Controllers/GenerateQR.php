<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TeacherInformation;
use App\Models\StudentInformation;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class GenerateQR extends Controller
{
        public function showQrCodeForm()
    {
        return view('generateQrCode');
    }
    public function showRegisterTeacherForm()
{
    return view('register-teacher');
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


      $photoPath = 'StudentsImage/Placeholder_Person.jpg';
    if ($request->hasFile('studentPhoto')) {
        $photosPath = base_path('StudentsImage');
        if (!file_exists($photosPath)) {
            mkdir($photosPath, 0777, true);
        }

        $photoName = time() . '_' . $request->file('studentPhoto')->getClientOriginalName();
        $request->file('studentPhoto')->move($photosPath, $photoName);
        $photoPath = 'StudentsImage/' . $photoName;
    }
       StudentInformation::create([
        'user_id' => $student->id, 
        'student_name' => $validated['full_name'],
        'class' =>  $request->input('class'),
        'department' =>  $request->input('class'), 
      'photo_url' => $photoPath,
    ]);
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
public function registerTeacher(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'phone_number' => 'required|numeric',
        'password' => 'required|string|min:8',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'class' => 'required|string|max:255',
    ]);

    $user = User::create([
        'name' => $request->input('username'),
        'email' => $request->input('email_address'),
        'password' => Hash::make($request->input('password')),
        'role' => 'Teacher',
        'phone_number' => $request->input('phone_number'),
    ]);

    $photoPath = null;
    if ($request->hasFile('photo')) {
        $photosPath = base_path('TeachersImage');
        if (!file_exists($photosPath)) {
            mkdir($photosPath, 0777, true);
        }

        $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
        $request->file('photo')->move($photosPath, $photoName);
        $photoPath = 'TeachersImage/' . $photoName;
    }
    TeacherInformation::create([
        'user_id' => $user->id, 
        'teacher_name' => $request->input('username'),
        'department' => $request->input('class'),
        'photo_url' => $photoPath,
    ]);
     return back()->with('success', 'Teacher registered successfully!');
}

}
