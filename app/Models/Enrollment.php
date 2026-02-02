<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'student_id',
        'course_id'
    ];

    // Enrollment → Student (Many to many)
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Enrollment → Course (Many to many)
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
