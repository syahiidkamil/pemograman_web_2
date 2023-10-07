<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id', 'email', 'password', 'Nama', 'Nama_belakang', 'alamat', 'telepon', 'avatar'];
    use HasFactory;
}
