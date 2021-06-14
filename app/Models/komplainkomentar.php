<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komplainkomentar extends Model
{
   

        protected $table = 'komplain_komentar';
        protected $fillable = ['id_komplain','id_user_from','id_user_to','statuskomplain','tanggapan'];

}


















