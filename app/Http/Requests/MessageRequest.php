<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'receive_id' => 'numeric|required',
            'content' => 'string|max:192|required'
        ];
    }

    public function messages()
    {
        return [
            'content.string' => 'Wiadomość nie może być pusta.',
            'content.required' => 'Wiadomość nie może być pusta.'
        ];
    }
}
