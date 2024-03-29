<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamneza extends Model
{
    protected $fillable = ['genetic_diseases','hypertension','physical_activity','diet_habits','smoking','alcohol_consumption','current_symptoms','recent_illness','medication_history','kartela_id'];
    use HasFactory;
}
