<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentSubjectRequest;
use App\Services\StudentSubjectService;
use Illuminate\Http\RedirectResponse;
use App\Models\Student; 
use App\Models\Subject; 
use Illuminate\View\View;

class StudentSubjectController extends Controller
{
    protected $studentSubjectService;

    public function __construct(StudentSubjectService $studentSubjectService)
    {
        $this->studentSubjectService = $studentSubjectService;
    }

    public function index(): View
    {
        $studentSubjects = $this->studentSubjectService->all();
        return view('student_subjects.index', compact('studentSubjects'));
    }

    public function create(): View
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('student_subjects.create', compact('students', 'subjects'));
    }

    public function store(StudentSubjectRequest $request): RedirectResponse
    {
        $this->studentSubjectService->store($request->validated());
        return redirect()->route('student_subjects.index')->with('success', 'Student-Subject Relation Added Successfully');
    }

    public function edit($id): View
    {
        $studentSubject = $this->studentSubjectService->find($id);
        $students = Student::all();
        $subjects = Subject::all();
        return view('student_subjects.edit', compact('studentSubject', 'students', 'subjects'));
    }

    public function update(StudentSubjectRequest $request, $id): RedirectResponse
    {
        $this->studentSubjectService->update($id, $request->validated());
        return redirect()->route('student_subjects.index')->with('success', 'Student-Subject Relation Updated Successfully');
    }

    public function destroy($id): RedirectResponse
    {
        $this->studentSubjectService->delete($id);
        return redirect()->route('student_subjects.index')->with('success', 'Student-Subject Relation Deleted Successfully');
    }
}
