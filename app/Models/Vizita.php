<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vizita extends Model
{
    protected $table = 'vizita';
    protected $fillable = ['sherbimi_id', 'reminder', 'data_fillimit', 'kartela_id','perseritja'];
    use HasFactory;
}
