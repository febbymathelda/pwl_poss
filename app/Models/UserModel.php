<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute; 
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    // use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'users_id';

    protected $fillable = [
        'level_id',
        'username', 
        'nama', 
        'password',
        'image'//Tambahan
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function level() 
    { 
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id'); 
    } 
    
    protected function image(): Attribute
    {
         return Attribute::make( 
            get: fn ($image) => url('/storage/posts/' . $image), 
        ); 
    }

    // public function level(): BelongsTo
    // {
    //     return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    // }

    // public function stok(): HasMany
    // {
    //     return $this->hasMany(StokModel::class, 'user_id', 'user_id');
    // }

    // public function transaksi(): HasMany
    // {
    //     return $this->hasMany(TransaksiModel::class, 'user_id', 'user_id');
    // }
}