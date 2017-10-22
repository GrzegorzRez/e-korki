<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourceRequest extends FormRequest
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
            'title' => 'string',
            'content' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'title.string' => 'Tytuł nie może być pusty.',
            'content.string' => 'Treść nie może być pusta.'
        ];
    }
}
