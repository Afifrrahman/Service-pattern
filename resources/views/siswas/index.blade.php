@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <h1>Daftar Siswa</h1>
    <a href="{{ route('siswas.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
    
    @if($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Kelas</th>
                <th>No Telp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->no_telp }}</td>
                    <td>
                        <a href="{{ route('siswas.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('siswas.destroy', $siswa->id) }}" method="POST" style="display:inline-block;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let form = event.target;
                Swal.fire({
                    title: 'Konfirmasi Penghapusan',
                    text: "Yakin ingin menghapus data siswa ini?",
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
