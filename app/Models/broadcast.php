<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class broadcast extends Model
{
    use HasFactory;

    protected $table = 'broadcast';
    protected $fillable = ['no_hp','pesan',];
}
