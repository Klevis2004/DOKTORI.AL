<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KartelaRequest extends FormRequest
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
            'emri' => 'string|max:255',
            'atesia' => 'string|max:255',
            'mbiemri' => 'string|max:255',
            'memesia' => 'string|max:255',
            'datelindja' => 'date',
            'vendlindja' => 'string|max:255',
            'adresa' => 'string|max:255',
            'tel' => 'string|max:15',
            'email' => 'email|max:255',
            'grupi_gjakut' => 'string|max:255',
            'gjinia' => 'string|max:255',
        ];
    }
}
