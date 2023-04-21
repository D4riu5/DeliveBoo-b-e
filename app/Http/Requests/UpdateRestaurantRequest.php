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
            'name' => 'required|regex:/^[a-zA-Z0-9 ]+$/|string|max:32',
            'address' => 'required|regex:/^[a-zA-Z0-9 ]+$/|string|max:128',
            'image' => 'nullable|image|max:2048',
            'PIVA' => 'required|max:11|min:11|',
            'delete_image' => 'nullable',
            'types' => 'required|array|exists:restaurants,id'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Inserisci il nome della tua attività',
            'name.regex' => 'La casella di testo deve contenere solo lettere e/o numeri. Per favore, inserisci un valore valido.',
            'name.max' => 'Limite massimo di caratteri: 32',
            'address.required' => "Inserisci l'indirizzo della tua attività",
            'address.regex' => 'La casella di testo deve contenere solo lettere e/o numeri. Per favore, inserisci un valore valido.',
            'address.max' => 'Limite massimo di caratteri: 128',
            'PIVA.required' => 'Inserisci il codice numerico della tua partita IVA',
            'PIVA.min' => 'Il codice Parita IVA deve essere composto da undici cifre',
            'PIVA.max' => 'Il codice Parita IVA deve essere composto da undici cifre',
            'image.image' => 'Il file caricato deve essere un\'immagine',
            'image.max' => 'Il file caricato non può superare i 2MB di dimensione',
            'types.required' => 'Seleziona almeno una categoria!',
            'types.array' => 'Il campo categorie deve essere un array.',
            'types.exists' => 'Una o più categorie selezionate non sono valide.'
        ];
    }
}
