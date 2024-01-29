<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'service_id',
    ];

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
        
    }
}
