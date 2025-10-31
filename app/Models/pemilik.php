<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;

    protected $table = 'pemilik';
    protected $primaryKey = 'idpemilik';
    public $timestamps = false;

    protected $fillable = [
        'no_wa',
        'alamat',
        'iduser'
    ];

    // 🔹 Relasi ke User (Many to One)
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }

    // 🔹 Relasi ke Pet (One to Many)
    public function pet()
    {
        return $this->hasMany(Pet::class, 'idpemilik', 'idpemilik');
    }
}
