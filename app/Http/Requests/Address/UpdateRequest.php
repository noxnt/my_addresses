<?php

namespace App\Http\Requests\Address;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => "string|unique:addresses,name,{$this->address->id}",
            'area_id' => 'integer',
            'city_id' => 'integer',
            'house' => 'nullable|string',
            'street' => 'nullable|string',
            'info' => 'nullable|string',
        ];
    }
}
