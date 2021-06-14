<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komplain extends Model
{
   

        protected $table = 'complain';
        protected $fillable = ['created_by', 'id_layanan'.'id_user','id_kategori','komplain','path_bukti','status_utama_komplain'];

}