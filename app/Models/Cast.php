<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    protected $table = 'casts';

    protected $fillable = [
        'name',
        'age',
        'bio',
    ];

    public function actors()
    {
        return $this->hasMany(Actor::class);
    }
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}