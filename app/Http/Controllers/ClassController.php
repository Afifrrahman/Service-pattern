<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassRequest;
use App\Services\ClassService;
use App\Models\Classes;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClassController extends Controller
{
    protected $classService;

    public function __construct(ClassService $classService)
    {
        $this->classService = $classService;
    }

    public function index(): View
    {
        $classes = $this->classService->all();
        return view('classes.index', compact('classes'));
    }

    public function create(): View
    {
        return view('classes.create');
    }

    public function store(ClassRequest $request): RedirectResponse
    {
        $this->classService->store($request->validated());
        return redirect()->route('classes.index')->with('success', 'Class Added Successfully');
    }

    public function edit(Classes $class): View
    {
        return view('classes.edit', compact('class'));
    }

    public function update(ClassRequest $request, Classes $class): RedirectResponse
    {
        $this->classService->update($class->id, $request->validated());
        return redirect()->route('classes.index')->with('success', 'Class Updated Successfully');
    }

    public function destroy(Classes $class): RedirectResponse
    {
        $this->classService->delete($class->id);
        return redirect()->route('classes.index')->with('success', 'Class Deleted Successfully');
    }
}
