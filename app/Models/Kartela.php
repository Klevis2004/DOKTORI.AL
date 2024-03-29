<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartela extends Model
{
    protected $fillable = ['pacient_id', 'emri', 'atesia', 'mbiemri', 'datelindja', 'vendlindja', 'adresa', 'tel', 'email', 'memesia', 'grupi_gjakut', 'gjinia'];
    use HasFactory;
}
