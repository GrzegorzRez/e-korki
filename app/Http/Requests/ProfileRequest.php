<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'avatar' => 'image',
            'name' => 'string|max:191|required',
            'surname' => 'string|max:191|required',
            'email' => 'email|max:191|required',
            'phone' => 'required|regex:/[0-9]{9}/',
            'location' => 'string|max:191',
            'description' => 'string|max:191'
        ];
    }
}
