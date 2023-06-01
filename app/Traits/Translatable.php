<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait Translatable
{
    public function getTranslatedColumn($column)
    {
        $locale = App::getLocale();
        return $column . '_' . $locale;
    }
}
