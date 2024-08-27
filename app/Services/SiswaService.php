<?php
namespace App\Services;

use App\Models\Siswa;

class SiswaService
{
    public function store(array $data)
    {
        return Siswa::create($data);
    }

    public function update(Siswa $siswa, array $data)
    {
        return $siswa->update($data);
    }

    public function delete(Siswa $siswa)
    {
        return $siswa->delete();
    }
}
