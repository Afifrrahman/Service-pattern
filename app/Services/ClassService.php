<?php

namespace App\Services;

use App\Models\Classes;

class ClassService
{
    public function all()
    {
        return Classes::all();
    }

    public function store(array $data)
    {
        Classes::create($data);
    }

    public function update($id, array $data)
    {
        $class = Classes::findOrFail($id);
        $class->update($data);
    }

    public function delete($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();
    }
}
