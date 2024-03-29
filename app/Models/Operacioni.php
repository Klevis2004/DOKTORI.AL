<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacioni extends Model
{
    protected $fillable = ['data_operacionite','emri_mjekut','specialiteti_mjekut','diagnoza','arsyeja_opecionit_sipas_mjekut','rezultatet_e_testimeve_paraoperimit',
    'lloji_anestezise','mjeku_ansetezise','lloji_opeacionit','hapat_operimit','mjete_perdorimi','mbyllja_plages','keshillat_post_operimit','programi_rehabilitimit',
    'rreziqet','parandalo_rreziqet','emergjenca', 'kartela_id'];
    use HasFactory;
}
