<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'district_id',
        'address',
        'long_lat',
        'name',
        'phone',
        'title',
        'description',
        'photo',
        'gallery',
        'raiting',
        'status',
    ];
}
