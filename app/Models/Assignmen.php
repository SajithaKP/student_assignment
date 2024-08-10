<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignmen extends Model
{
    use HasFactory;
    protected $table = 'assigmnt';
    protected $fillable = ['student_id', 'assignment'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
