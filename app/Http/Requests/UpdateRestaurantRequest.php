<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantRequest extends FormRequest
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
            'name' => 'required|string|max:32',
            'address' => 'required|string|max:128',
            'image' => 'nullable|image|max:2048',
            'PIVA' => 'required|max:11|min:11',
            'delete_image' => 'nullable',
            'types' => 'nullable|array|exists:restaurants,id'
        ];
    }
}
