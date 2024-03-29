<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnamnezaRequest extends FormRequest
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
            'genetic_diseases' => 'required',
            'hypertension' => 'required',
            'physical_activity' => 'required',
            'diet_habits' => 'required',
            'smoking' => 'required',
            'alcohol_consumption' => 'required',
            'current_symptoms' => 'required',
            'recent_illness' => 'required',
            'medication_history' => 'required',
        ];
    }
}
