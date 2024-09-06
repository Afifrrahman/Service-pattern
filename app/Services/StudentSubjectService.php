<?php
namespace App\Services;

use App\Repositories\StudentSubjectRepository;

class StudentSubjectService
{
    protected $studentSubjectRepository;

    public function __construct(StudentSubjectRepository $studentSubjectRepository)
    {
        $this->studentSubjectRepository = $studentSubjectRepository;
    }

    public function all()
    {
        return $this->studentSubjectRepository->all();
    }

    public function store(array $data)
    {
        return $this->studentSubjectRepository->store($data);
    }

    public function update($id, array $data)
    {
        return $this->studentSubjectRepository->update($id, $data);
    }

    public function find($id)
    {
        return $this->studentSubjectRepository->find($id);
    }

    public function delete($id)
    {
        return $this->studentSubjectRepository->delete($id);
    }
}
