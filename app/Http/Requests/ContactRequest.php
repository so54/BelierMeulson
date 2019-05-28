<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom' => 'bail|required|between:2,20|alpha',
            'prenom' => 'bail|required|between:2,20|alpha',
            'adresse' => 'bail|between:5,50|nullable',
            'code_postal' => 'bail|numeric|digits:5|nullable',
            'ville' => 'bail|between:2,40|alpha|nullable',
            'telephone' => 'bail|required|digits:10|numeric',
            'email' => 'bail|required|email',
            'commentaire' => 'bail|required|max:500',
            'fichier'=> 'bail|max:2000|mimes:jpeg,jpg,png,pdf,docx,doc,bmp,gif'];
    }

    public function messages(){

        return [
            'nom.alpha' => 'Le nom ne doit contenir que des lettres',
            'nom.between'  => 'Le nom doit contenir entre 2 et 20 caractères',
            'prenom.alpha' => 'Le prénom ne doit contenir que des lettres',
            'prenom.between' => 'Le prénom doit contenir entre 2 et 20 caractères',
            'ville.alpha' => 'Le nom de la ville ne doit contenir que des lettres',
            'ville.between' => 'Le nom de la ville doit contenir entre 2 et 40 caractères',
            'adresse.between' => "L'adresse doit contenir entre 5 et 50 caractères",
            'code_postal.numeric'=> 'Le code postal doit contenir 5 chiffres',
            'code_postal.digits' => 'Le code postal doit contenir 5 chiffres',
            'telephone.digits'=>'Le téléphone doit contenir 10 chiffres',
            'telephone.numeric' => 'Le téléphone doit contenir 10 chiffres',
            'email.email' => "L'adresse email doit être valide",
            'commentaire.max' => 'Le message ne doit pas dépassé 500 caractères',
            'fichier.max'=>'Le fichier ne doit pas dépasser 2 mo',
            'fichier.mimes'=>'Les formats de fichiers autorisés sont : .pdf, .docx, .doc, .jpeg, .jpg, .bmp. .png, .gif'];
    }
}
