<?php

namespace App\Services;

use App\Repositories\SubjectRepository;

class SubjectService
{
    protected $subjectRepository;

    public function __construct(SubjectRepository $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }

    public function all()
    {
        return $this->subjectRepository->all();
    }

    public function find($id)
    {
        return $this->subjectRepository->find($id);
    }

    public function store(array $data)
    {
        return $this->subjectRepository->store($data);
    }

    public function update($id, array $data)
    {
        return $this->subjectRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->subjectRepository->delete($id);
    }
}
