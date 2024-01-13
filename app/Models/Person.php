<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'user_id',
        'profession_id',
        'name',
        'first_name',
        'last_name',
        'bio',
        'birthdate',
        'staff',
        'phone',
        'photo',
        'sex',
        'raiting',
        'status',
        'experience',
    ];

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    public function professionlevels()
    {
        return $this->belongsToMany(Professionlevel::class);
    }

    public function professions()
    {
        return $this->belongsTo(Profession::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
