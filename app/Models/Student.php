<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'mob', 'email'];

    public function assignments()
    {
        return $this->hasMany(Assignmen::class);
    }
}
