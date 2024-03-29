<?php

namespace App;

use App\Models\Kartela;
use App\Models\Sherbimi;

function helper_sherbim($sherbimId) {
    $sherbim_name = Sherbimi::where('id', $sherbimId)
        ->select('emertimi')
        ->first('emertimi');
    return $sherbim_name;
}
function id($kartelaId) {
    $kartela_id = Kartela::where('id', $kartelaId)
        ->select('emri')
        ->first('emri');
    return $kartela_id;
}
