<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refLayanan extends Model
{
    // use HasFactory;

    protected $table = 'ref_layanan';
    protected $fillable = ['nama','is_active', 'created_by'];

}
