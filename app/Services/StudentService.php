<?php

namespace App\Services;

use App\Repositories\StudentRepositoryInterface;

class StudentService
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function all()
    {
        return $this->studentRepository->all();
    }

    public function store(array $data)
    {
        return $this->studentRepository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->studentRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->studentRepository->delete($id);
    }
}
