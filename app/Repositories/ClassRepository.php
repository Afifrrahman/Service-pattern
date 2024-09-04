<?php

namespace App\Repositories;

use App\Models\Classes;

class ClassRepository
{
    public function all()
    {
        return Classes::all();
    }

    public function find($id)
    {
        return Classes::findOrFail($id);
    }

    public function create(array $data)
    {
        return Classes::create($data);
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
