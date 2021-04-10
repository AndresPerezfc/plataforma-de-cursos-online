<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;

    // Relación uno a muchos

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }

    // Relación uno a muchos inversa

    public function courses()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
