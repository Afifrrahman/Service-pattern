@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <section>
                <div class="py-2 mb-4">
                    <h1>Add Student</h1>
                    <!-- Breadcrumb -->
                    <nav class="d-flex">
                        <h6 class="mb-0">
                            <a href="{{ url('/') }}" class="text-reset">Beranda</a>
                            <span>/</span>
                            <a href="{{ route('students.index') }}" class="text-reset">Siswa</a>
                            <span>/</span>
                            <a href="#" class="text-reset text-muted"><u>Tambah Siswa</u></a>
                        </h6>
                    </nav>
                    <!-- Breadcrumb -->
                </div>
                <div class="row">
                    <div class="col-md-8">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('students.store') }}" method="POST" id="createStudentForm">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ route('students.index') }}" class="btn btn-secondary">
                                        <i class="fa fa-chevron-left"></i>
                                        <span>Kembali</span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="name">Nama
                                                    <span class="text-danger">*</span></label>
                                                <input id="name" name="name" type="text" placeholder="Nama Siswa" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Dropdown Kelas -->
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="class_id">Kelas
                                                    <span class="text-danger">*</span></label>
                                                <select id="class_id" name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                                                    <option value="">Pilih Kelas</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>
                                                            {{ $class->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('class_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="address">Alamat
                                                    <span class="text-danger">*</span></label>
                                                <textarea id="address" name="address" placeholder="Alamat Siswa" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                                @error('address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="gendre">Jenis Kelamin</label>
                                                <select id="gendre" name="gendre" class="form-control @error('gendre') is-invalid @enderror">
                                                    <option value="male" {{ old('gendre') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="female" {{ old('gendre') == 'female' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                @error('gendre')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="email">Email
                                                    <span class="text-danger">*</span></label>
                                                <input id="email" name="email" type="email" placeholder="Email Siswa" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="phone_number">Nomor Telepon</label>
                                                <input id="phone_number" name="phone_number" type="number" placeholder="Nomor Telepon" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" />
                                                @error('phone_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('createStudentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Konfirmasi',
                text: "Yakin ingin menyimpan data siswa ini?",
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
