<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'title'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'issaati'=>'nullable',
            'adress_pl'=>'required',
            'adress_en'=>'required',
            'adress_ru'=>'required',
            'facebook'=>'nullable',
            'linkedin'=>'nullable',
            'instagram'=>'nullable',
            'whatshapp'=>'nullable',
        ];
    }
}
