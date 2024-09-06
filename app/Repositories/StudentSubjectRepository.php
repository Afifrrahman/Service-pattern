<?php
namespace App\Repositories;

use App\Models\StudentSubject;

class StudentSubjectRepository
{
    public function all()
    {
        
        return StudentSubject::with(['student', 'subject'])->get();
    }

    public function store(array $data)
    {
        return StudentSubject::create($data);
    }

    public function update($id, array $data)
    {
        $studentSubject = StudentSubject::findOrFail($id);
        $studentSubject->update($data);
        return $studentSubject;
    }

    public function find($id)
    {
        return StudentSubject::with(['student', 'subject'])->findOrFail($id);
    }

    public function delete($id)
    {
        $studentSubject = StudentSubject::findOrFail($id);
        $studentSubject->delete();
        return $studentSubject;
    }
}
