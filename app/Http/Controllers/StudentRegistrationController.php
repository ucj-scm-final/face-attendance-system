<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class StudentRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = StudentRegistration::all();
        return view('student_registrations.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('student_registrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validated = $request->validate([
            'reg_no' => 'required|string',
            'name' => 'required|string',
            'nic' => 'required|string',
            'stu_image' => 'required|image',
            'dep_id' => 'required|exists:departments,id',
        ]);

        // Handle image upload
        if ($request->hasFile('stu_image')) {
            $imagePath = $request->file('stu_image')->store('students', 'public');
            $validated['stu_image'] = $imagePath;
        }

        StudentRegistration::create($validated);

        return redirect()->route('student-registrations.index')->with('success', 'Student registered successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(StudentRegistration $studentRegistration)
    {
        return view('student_registrations.show', compact('studentRegistration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentRegistration $studentRegistration)
    {
        return view('student_registrations.edit', compact('studentRegistration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentRegistration $studentRegistration)
    {
            $validated = $request->validate([
            'reg_no' => 'required|string',
            'name' => 'required|string',
            'nic' => 'required|string',
            'dep_id' => 'required|exists:departments,id',
        ]);

        // Handle new image upload if provided
        if ($request->hasFile('stu_image')) {
            $imagePath = $request->file('stu_image')->store('students', 'public');
            $validated['stu_image'] = $imagePath;
        }

        $studentRegistration->update($validated);

        return redirect()->route('student-registrations.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentRegistration $studentRegistration)
    {
        $studentRegistration->delete();
        return redirect()->route('student-registrations.index')->with('success', 'Student deleted successfully.');

    }
}
