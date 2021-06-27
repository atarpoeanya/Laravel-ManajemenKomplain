<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawabanrating extends Model
{
    use HasFactory;

    protected $table = 'jawaban_rating';
    protected $fillable = ['id_pertanyaan','id_komplain','jawaban','is_active'];
}
