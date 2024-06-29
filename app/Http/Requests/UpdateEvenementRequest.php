<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEvenementRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'localite' => 'required|string|max:255',
            'date_evenement' => 'required|date',
            'date_limite_inscription' => 'required|date|before_or_equal:date_evenement',
            'nombre_place' => 'required|integer|min:1',
            'image' => 'required|string|max:255',
            'association_id' => 'required|exists:associations,id',
        ];
    }
}
