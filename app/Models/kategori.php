<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //has factory

        protected $table = 'ref_kategori';
        protected $fillable = ['created_by', 'nama'];

}