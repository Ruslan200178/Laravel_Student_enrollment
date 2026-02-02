<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['first_name','last_name','email','phone'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
