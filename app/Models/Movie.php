<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'year',
        'director',
        'poster',
        'rented',
        'synopsis'
    ];

    public function isDirector() {
        return $this->belongsTo(\App\Models\Director::class, 'director_id');
    }

}
