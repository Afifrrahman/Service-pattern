<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Services\SiswaService;
use App\Models\Siswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SiswaController extends Controller
{
    protected $siswaService;

    public function __construct(SiswaService $siswaService)
    {
        $this->siswaService = $siswaService;
    }

    public function index(): View 
    {
        $siswas = $this->siswaService->all();
        return view('siswas.index', compact('siswas'));
    }

    public function create(): View
    {
        return view('siswas.create');
    }

    public function store(SiswaRequest $request): RedirectResponse
    {
        $this->siswaService->store($request->validated());
        return redirect()->route('siswas.index')->with('success', 'Siswa Berhasil Ditambahkan');
    }

    public function edit(Siswa $siswa): View
    {
        return view('siswas.edit', compact('siswa'));
    }

    public function update(SiswaRequest $request, Siswa $siswa): RedirectResponse
    {
        $this->siswaService->update($siswa->id, $request->validated());
        return redirect()->route('siswas.index')->with('success', 'Data Siswa Berhasil Diperbarui.');
    }

    public function destroy(Siswa $siswa): RedirectResponse
    {
        $this->siswaService->delete($siswa->id);
        return redirect()->route('siswas.index')->with('success', 'Data berhasil dihapus');
    }
}
