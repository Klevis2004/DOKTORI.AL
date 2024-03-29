<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VizitaRequest extends FormRequest
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
            'sherbimi_id' => 'required',
            'reminder' => 'required',
            'data_fillimit' => 'required|date|max:255',
            'perseritja' => 'required|string|max:255',
            'kartela_id' => 'required'
        ];
    }
}
