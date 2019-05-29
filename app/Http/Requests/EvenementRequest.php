<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvenementRequest extends FormRequest
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
        $id = $this->evenements ? ',' . $this->evenements->ID_EVENT: '';
        return [
            'nom_event' => 'bail|string|required|between:4,20|unique:evenements,nom_event' .$id,
            'date_event'=> 'bail|required|date'
        ];
    }

    public function messages()
    {

        return [
            'nom_event.between'=>'Le nom doit contenir entre 4 et 50 caractères',
            'nom_event.unique'=>'Ce nom d\'album existe déjà',
            'date_event.date'=>'La date est invalide'
        ];
    }
}
