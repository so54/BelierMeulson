<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConnexionRequest extends FormRequest
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
            'email' => 'bail|required|email',
            'password' => 'bail|required|between:8,20'];
    }

    public function messages()
    {

        return [
            'email.required' => "L'adresse mail est obligatoire",
            'password.required' => 'Le mot de passe est obligatoire',
            'email.email' => "L'adresse mail doit être valide",
            'password.between' => "Le mot de passe doit être compris entre 8 et 20 caractères"];
    }
}