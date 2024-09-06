<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use App\Services\SubjectService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SubjectController extends Controller
{
    protected $subjectService;

    public function __construct(SubjectService $subjectService)
    {
        $this->subjectService = $subjectService;
    }

    public function index(): View
    {
        $subjects = $this->subjectService->all();
        return view('subjects.index', compact('subjects'));
    }

    public function create(): View
    {
        return view('subjects.create');
    }

    public function store(SubjectRequest $request): RedirectResponse
    {
        $this->subjectService->store($request->validated());
        return redirect()->route('subjects.index')->with('success', 'Subject Added Successfully');
    }

    public function edit($id): View
    {
        $subject = $this->subjectService->find($id);
        return view('subjects.edit', compact('subject'));
    }

    public function update(SubjectRequest $request, $id): RedirectResponse
    {
        $this->subjectService->update($id, $request->validated());
        return redirect()->route('subjects.index')->with('success', 'Subject Updated Successfully');
    }

    public function destroy($id): RedirectResponse
    {
        $this->subjectService->delete($id);
        return redirect()->route('subjects.index')->with('success', 'Subject Deleted Successfully');
    }
}
