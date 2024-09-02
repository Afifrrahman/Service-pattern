@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <section>
                <div class="py-2 mb-4">
                    <h1>Update Student</h1>
                    <!-- Breadcrumb -->
                    <nav class="d-flex">
                        <h6 class="mb-0">
                            <a href="{{ url('/') }}" class="text-reset">Beranda</a>
                            <span>/</span>
                            <a href="{{ route('students.index') }}" class="text-reset">Siswa</a>
                            <span>/</span>
                            <a href="#" class="text-reset text-muted"><u>Edit Siswa</u></a>
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
                        <form action="{{ route('students.update', $student->id) }}" method="POST" id="editStudentForm">
                            @csrf
                            @method('PUT')
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
                                                <input id="name" name="name" type="text" placeholder="Nama Siswa" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $student->name) }}" />
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="address">Alamat
                                                    <span class="text-danger">*</span></label>
                                                <textarea id="address" name="address" placeholder="Alamat Siswa" class="form-control @error('address') is-invalid @enderror">{{ old('address', $student->address) }}</textarea>
                                                @error('address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="gendre">Jenis Kelamin</label>
                                                <select id="gendre" name="gendre" class="form-control @error('gendre') is-invalid @enderror">
                                                    <option value="male" {{ old('gendre', $student->gendre) == 'male' ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="female" {{ old('gendre', $student->gendre) == 'female' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                @error('gendre')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="email">Email
                                                    <span class="text-danger">*</span></label>
                                                <input id="email" name="email" type="email" placeholder="Email Siswa" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $student->email) }}" />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="class">Kelas</label>
                                                <input id="class" name="class" type="text" placeholder="Kelas" class="form-control @error('class') is-invalid @enderror" value="{{ old('class', $student->class) }}" />
                                                @error('class')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label" for="phone_number">Nomor Telepon</label>
                                                <input id="phone_number" name="phone_number" type="number" placeholder="Nomor Telepon" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number', $student->phone_number) }}" />
                                                @error('phone_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
        document.getElementById('editStudentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Konfirmasi',
                text: "Yakin ingin mengupdate data siswa ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Update',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endpush
