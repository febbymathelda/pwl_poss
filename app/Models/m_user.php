<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    use HasFactory;
    protected $table = "m_user";
    //protected $timestamps = false;
    protected $primaryKey = "users_id";
    protected $fillable = [
        'users_id',
        'level_id',
        'username',
        'nama',
        'password',
        'image'
    ];
}
