<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clause extends Model
{
    use HasFactory;
    public function homework(){
        return $this->hasMany(Homework::class);
    }
    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
