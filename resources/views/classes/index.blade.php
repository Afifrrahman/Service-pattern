@extends('layouts.app')

@section('title', 'Daftar Kelas')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1>Daftar Kelas</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ url('/') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('classes.index') }}" class="text-reset"><u>Daftar Kelas</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('classes.create') }}" class="btn btn-primary">Tambah Kelas</a>
                        </div>
                        <div class="card-body">
                            @if($message = Session::get('success'))
                            <div class="alert alert-success">{{ $message }}</div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-hover table-striped nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($classes as $key => $class)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $class->name }}</td>
                                            <td>{{ $class->description }}</td>
                                            <td>
                                                <form action="{{ route('classes.destroy', $class->id) }}" method="POST" id="deleteClassForm{{ $class->id }}" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger delete-btn">Hapus</button>
                                                </form>
                                                <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
        document.querySelectorAll('.delete-btn').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                let form = this.closest('form');
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Yakin ingin menghapus data kelas ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
