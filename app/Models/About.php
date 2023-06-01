<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory,Translatable;

    protected $guarded = [];

    public function getTitleAttribute($title)
    {
        return $this->attributes[$this->getTranslatedColumn('title')];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes[$this->getTranslatedColumn('description')];
    }

}
