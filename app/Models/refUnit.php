<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refUnit extends Model
{
    use HasFactory;

    protected $table = 'ref_unit';
    protected $fillable = ['nama','id_unit_parent', 'created_by', 'level', 'is_active'];
}
