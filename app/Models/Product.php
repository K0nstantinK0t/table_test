<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;
use App\Models\AddFields;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'external_code',
        'name',
        'description',
        'price',
        'discount',
    ];
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
    public function addFields()
    {
        return $this->hasOne(AddFields::class);
    }
}
