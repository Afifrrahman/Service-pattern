<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    protected $model;

    public function __construct(Student $student)
    {
        $this->model = $student;
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
        $student = $this->model->find($id);
        $student->update($data);
        return $student;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
