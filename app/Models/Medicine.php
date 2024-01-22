<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicinecategory_id',
        'representative_id',
        'photo',
        'name',
        'country',
        'manufacturer',
        'code',
        'number',
        'description',
        'status',
    ];

    public function medicinetypes()
    {
        return $this->belongsToMany(MedicineType::class);
    }

    public function medicinecategories()
    {
        return $this->belongsTo(MedicineCategory::class, 'medicinecategory_id');
    }

    public function representatives()
    {
        return $this->belongsTo(Representative::class, 'representative_id');
    }
}
