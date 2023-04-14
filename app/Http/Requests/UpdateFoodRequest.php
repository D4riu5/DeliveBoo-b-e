<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodRequest extends FormRequest
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
            'name' => 'required|max:64',
            'description' => 'required|max:255',
            'image' => 'nullable|image|max:2048',
            'price' => 'required|numeric|min:1|max:999.99',
            'course' => 'required|in:Antipasto,Primo,Secondo,Contorno,Dolce,Bevanda',
            'delete_image' => 'nullable',
            'spicy' => 'nullable|in:0,1',
            'gluten_free' => 'nullable|in:0,1',
            'kcal' => 'nullable|numeric|max:5000',
        ];
    }
}
