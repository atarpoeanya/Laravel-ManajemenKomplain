<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layananUnit extends Model
{
    // use HasFactory;

    protected $table = 'layanan_unit';
    protected $fillable = ['is_active', 'created_by', 'id_layanan', 'id_unit'];

}
