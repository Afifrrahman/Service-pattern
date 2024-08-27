<?php

namespace App\Services;

use App\Repositories\SiswaRepositoryInterface;
use App\Models\Siswa;

class SiswaService
{
    protected $siswaRepository;

    public function __construct(SiswaRepositoryInterface $siswaRepository)
    {
        $this->siswaRepository = $siswaRepository;
    }

    public function all()
    {
        return $this->siswaRepository->all();
    }

    public function store(array $data)
    {
        return $this->siswaRepository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->siswaRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->siswaRepository->delete($id);
    }
}
