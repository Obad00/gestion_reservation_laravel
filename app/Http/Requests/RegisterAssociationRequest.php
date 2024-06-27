<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAssociationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'association_nom' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'logo' => ['required', 'string'], 
            'adresse' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'integer'],
            'secteur' => ['required', 'string', 'max:255'],
            'ninea' => ['required', 'string', 'max:255'],
            'date_creation_association' => ['required', 'date'],
            'etat' => ['required', 'boolean'],
        ];
    }
}
