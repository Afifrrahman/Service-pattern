@extends('layouts.app')

@section('title', 'Edit Relasi Siswa-Mata Pelajaran')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">Edit Relasi Siswa-Mata Pelajaran</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ url('/') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('student_subjects.index') }}" class="text-reset"><u>Daftar Relasi Siswa-Mata Pelajaran</u></a>
                        <span>/</span>
                        <a href="{{ route('student_subjects.edit', $studentSubject->id) }}" class="text-reset"><u>Edit Relasi</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Form Edit Relasi</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('student_subjects.update', $studentSubject->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="student_id">Siswa</label>
                                    <select id="student_id" name="student_id" class="form-control">
                                        @foreach($students as $student)
                                            <option value="{{ $student->id }}" {{ $student->id == $studentSubject->student_id ? 'selected' : '' }}>
                                                {{ $student->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('student_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="subject_id">Mata Pelajaran</label>
                                    <select id="subject_id" name="subject_id" class="form-control">
                                        @foreach($subjects as $subject)
                                            <option value="{{ $subject->id }}" {{ $subject->id == $studentSubject->subject_id ? 'selected' : '' }}>
                                                {{ $subject->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('subject_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('student_subjects.index') }}" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
