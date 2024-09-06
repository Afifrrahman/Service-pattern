<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class StudentSubject extends Pivot
{
    
    protected $table = 'student_subjects';

    
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }


    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
