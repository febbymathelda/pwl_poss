<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_users'; //mendefinisikan nama tabel yg digunakan oleh model
    protected $primaryKey = 'users_id'; //mendefinisikan priary key dr tabel yg digunakan
    protected $fillable = ['level_id', 'username', 'nama'];
}
