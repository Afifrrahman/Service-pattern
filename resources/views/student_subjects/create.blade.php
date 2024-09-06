@extends('layouts.app')

@section('title', 'Tambah Relasi Siswa-Mata Pelajaran')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">Tambah Relasi Siswa-Mata Pelajaran</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ url('/') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('student_subjects.index') }}" class="text-reset"><u>Daftar Siswa-Mata Pelajaran</u></a>
                        <span>/</span>
                        <a href="{{ route('student_subjects.create') }}" class="text-reset"><u>Tambah Relasi</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Relasi Siswa-Mata Pelajaran</h5>
                        </div>
                        <div class="card-body">
                            <!-- Display error messages -->
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Form to add student-subject relationship -->
                            <form action="{{ route('student_subjects.store') }}" method="POST" id="addStudentSubjectForm">
                                @csrf
                                
                                <!-- Student Dropdown -->
                                <div class="form-group">
                                    <label for="student_id">Siswa</label>
                                    <select id="student_id" name="student_id" class="form-control @error('student_id') is-invalid @enderror">
                                        <option value="">Pilih Siswa</option>
                                        @foreach($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('student_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Subject Dropdown -->
                                <div class="form-group">
                                    <label for="subject_id">Mata Pelajaran</label>
                                    <select id="subject_id" name="subject_id" class="form-control @error('subject_id') is-invalid @enderror">
                                        <option value="">Pilih Mata Pelajaran</option>
                                        @foreach($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subject_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <br>

                                <!-- Submit and Cancel Buttons -->
                                <button type="submit" class="btn btn-primary">Simpan</button>
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

@push('scripts')
    <script>
        document.getElementById('addStudentSubjectForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Konfirmasi',
                text: "Yakin ingin menyimpan relasi siswa dan mata pelajaran ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Simpan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endpush
