<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuestion extends FormRequest
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
            'form_id' => 'required|integer',
            'description' => 'required|string|max:255',
            'type' => [
                'required' => 
                    Rule::in(
                        ['number', 'text', 'date', 'radio', 'dropdown']
                    )
                ],
            'mandatory' => 'required|boolean'
        ];
    }
}
