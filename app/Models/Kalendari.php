<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalendari extends Model
{
    protected $fillable = ['kartela_id', 'kontrollet', 'orari'];
    use HasFactory;
}
