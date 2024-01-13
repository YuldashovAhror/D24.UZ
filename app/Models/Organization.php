<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function organizationtypes()
    // {
    //     return $this->belongsToMany(OrganizationType::class, 'organization_type_organization', 'organization_id', 'organization_type');
    // }
    public function organizationtypes()
    {
        return $this->belongsToMany(OrganizationType::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function districts()
    {
        return $this->belongsTo(District::class);
    }

    public function regions()
    {
        return $this->belongsTo(Region::class);
    }

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
