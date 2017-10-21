<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'category_id' => 'integer|required',
            'name' => 'string|max:191|required',
            'description' => 'string|required',
            'price_per_hour' => 'numeric|min:0|required',
            'location' => 'string'
        ];
    }

    public function messages()
    {
        return [
            'price_per_hour.min' => 'Cena musi być liczbą dodatnią.'
        ];
    }

}
