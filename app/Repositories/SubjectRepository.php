<?php

namespace App\Repositories;

use App\Models\Subject;

class SubjectRepository
{
    protected $model;

    public function __construct(Subject $subject)
    {
        $this->model = $subject;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $subject = $this->model->find($id);
        if ($subject) {
            $subject->update($data);
            return $subject;
        }
        return null;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
