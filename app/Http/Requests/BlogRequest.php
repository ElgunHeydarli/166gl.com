<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_pl'=>'required',
            'name_en'=>'required',
            'name_ru'=>'required',
            'description_pl'=>'nullable',
            'description_en'=>'nullable',
            'description_ru'=>'nullable',
            'img'=>'image|mimes:jpg,jpeg,svg,png',
            'slug_pl'=>'nullable',
            'slug_en'=>'nullable',
            'slug_ru'=>'nullable'
        ];
    }
}
