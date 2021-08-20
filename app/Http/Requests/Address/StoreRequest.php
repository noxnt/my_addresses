<?php

namespace App\Http\Requests\Address;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|unique:addresses',
            'area_id' => 'required|integer',
            'city_id' => 'required|integer',
            'house' => 'nullable|string',
            'street' => 'nullable|string',
            'info' => 'nullable|string',
        ];
    }
}
