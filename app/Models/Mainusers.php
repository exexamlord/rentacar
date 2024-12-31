<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mainusers extends Model
{
    protected $table = 'mainusers'; // Tablo ismi
    protected $fillable = ['email', 'password']; // Doldurulabilir alanlar

    

}
