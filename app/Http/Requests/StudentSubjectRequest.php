<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StudentSubjectRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id|unique:student_subjects,subject_id,NULL,id,student_id,' . $this->student_id,
        ];
    }
}
