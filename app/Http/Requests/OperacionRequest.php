<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperacionRequest extends FormRequest
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
            'data_operacionite' => 'required|date',
            'emri_mjekut' => 'required|string|max:255',
            'specialiteti_mjekut' => 'required|string|max:255',
            'diagnoza' => 'required|string',
            'arsyeja_opecionit_sipas_mjekut' => 'required|string',
            'rezultatet_e_testimeve_paraoperimit' => 'required|string',
            'lloji_anestezise' => 'required|string|in:Lokal,Regional,Përgjithshme',
            'mjeku_ansetezise' => 'required|string|max:255',
            'lloji_opeacionit' => 'required|string|in:Hapur,Endoskopik',
            'hapat_operimit' => 'required|string',
            'mjete_perdorimi' => 'required|string',
            'mbyllja_plages' => 'required|string',
            'keshillat_post_operimit' => 'required|string',
            'programi_rehabilitimit' => 'required|string',
            'rreziqet' => 'required|string',
            'parandalo_rreziqet' => 'required|string',
            'emergjenca' => 'required|string',
            'kartela_id' => 'required',
        ];
    }
}
