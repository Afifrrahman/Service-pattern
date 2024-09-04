@extends('layouts.app')

@section('title', 'Edit Kelas')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1>Edit Kelas</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ url('/') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('classes.index') }}" class="text-reset">Daftar Kelas</a>
                        <span>/</span>
                        <a href="#" class="text-reset text-muted"><u>Edit Kelas</u></a>
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
                    <form action="{{ route('classes.update', $class->id) }}" method="POST" id="editClassForm">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('classes.index') }}" class="btn btn-secondary">
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
                                            <input id="name" name="name" type="text" placeholder="Nama Kelas" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $class->name) }}" />
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="description">Deskripsi</label>
                                            <textarea id="description" name="description" placeholder="Deskripsi Kelas" class="form-control @error('description') is-invalid @enderror">{{ old('description', $class->description) }}</textarea>
                                            @error('description')
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
        document.getElementById('editClassForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Konfirmasi',
                text: "Yakin ingin memperbarui data kelas ini?",
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
