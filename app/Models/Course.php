<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    // Relación uno a muchos

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    // Relación uno a muchos inversa

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function Price()
    {
        return $this->belongsTo('App\Models\Price');
    }

    // Relación muchos a muchos

    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
