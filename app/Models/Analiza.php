<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analiza extends Model
{
    protected $fillable = ['document_name', 'description', 'analizat_docs','kartela_id'];
    use HasFactory;
}
