<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;

    protected $table = 'role_user';
    protected $primaryKey = 'idrole_user';
    public $timestamps = false;

    protected $fillable = [
        'iduser',
        'idrole',
        'status'
    ];

    // 🔹 Relasi ke User (Many to One)
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }

    // 🔹 Relasi ke Role (Many to One)
    public function role()
    {
        return $this->belongsTo(Role::class, 'idrole', 'idrole');
    }
}
