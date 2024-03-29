<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => 'min:3|max:100',
            'email' => 'email',
            'password' => 'min:8',
            're-password' => 'same:password',
            'user_id' => 'string',
            'emri' => 'string',
            'atesia' => 'string',
            'mbiemri' => 'string',
            'datelindja' => 'date',
            'vendlindja' => 'string',
            'adresa' => 'string',
            'tel' => 'string',
            'memesia' => 'string',
            'grupi_gjakut' => 'string',
            'gjinia' => 'string',
        ];
    }

}
