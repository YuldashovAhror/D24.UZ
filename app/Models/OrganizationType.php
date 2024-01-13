<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationType extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function organizations()
    // {
    //     return $this->belongsToMany(Organization::class, 'organization_type_organization', 'organization_id', 'organization_type');
    // }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }
}
