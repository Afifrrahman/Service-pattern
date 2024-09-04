<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Services\StudentService;
use App\Models\Student;
use App\Models\Classes; 
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index(): View 
    {
        $students = $this->studentService->all();
        return view('students.index', compact('students'));
    }

    public function create(): View
    {
        $classes = Classes::all(); 
        return view('students.create', compact('classes')); 
    }

    public function store(StudentRequest $request): RedirectResponse
    {
        $this->studentService->store($request->validated());
        return redirect()->route('students.index')->with('success', 'Student Added Successfully');
    }

    public function edit(Student $student): View
    {
        $classes = Classes::all(); 
        return view('students.edit', compact('student', 'classes')); 
    }

    public function update(StudentRequest $request, Student $student): RedirectResponse
    {
        $this->studentService->update($student->id, $request->validated());
        return redirect()->route('students.index')->with('success', 'Student Updated Successfully');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $this->studentService->delete($student->id);
        return redirect()->route('students.index')->with('success', 'Student Deleted Successfully');
    }
}
