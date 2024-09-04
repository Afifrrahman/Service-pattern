<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'address', 'gendre', 'email', 'phone_number', 'class_id',
    ];

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
