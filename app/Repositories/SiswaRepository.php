<?php

namespace App\Repositories;

use App\Models\Siswa;

class SiswaRepository implements SiswaRepositoryInterface
{
    protected $model;

    public function __construct(Siswa $siswa)
    {
        $this->model = $siswa;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $siswa = $this->model->find($id);
        $siswa->update($data);
        return $siswa;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
