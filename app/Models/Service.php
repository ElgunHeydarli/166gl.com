<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory, Translatable;

    protected $guarded = [];

    //    Slug
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($service) {
            $service->slug_az = Str::slug($service->name_pl) . '-' . rand(1, 99);
            $service->slug_en = Str::slug($service->name_en) . '-' . rand(1, 99);
            $service->slug_ru = Str::slug($service->name_ru) . '-' . rand(1, 99);
        });
    }
//
    public function getNameAttribute()
    {
        return $this->attributes[$this->getTranslatedColumn('name')];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes[$this->getTranslatedColumn('description')];
    }
}
