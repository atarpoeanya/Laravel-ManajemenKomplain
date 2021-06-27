<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupmember extends Model
{
    use HasFactory;

    protected $table = 'group_member';
    protected $fillable = ['id_group','id_kontak'];
}
