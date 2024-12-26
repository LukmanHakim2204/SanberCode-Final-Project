<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actors';
    protected $fillable = [
        'cast_id',
        'film_id',
        'name',
    ];

    public function casts()
    {
        return $this->belongsTo(Cast::class);
    }
}