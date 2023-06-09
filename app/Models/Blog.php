<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory, Translatable;

    protected $guarded = [];
    //    Slug
    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($blog){
            $blog->slug_pl = Str::slug($blog->name_pl).'-'.rand(1,99);
            $blog->slug_en = Str::slug($blog->name_en).'-'.rand(1,99);
            $blog->slug_ru = Str::slug($blog->name_ru).'-'.rand(1,99);
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
