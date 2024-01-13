<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professionlevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function persons()
    {
        return $this->belongsToMany(Person::class);
    }
}
