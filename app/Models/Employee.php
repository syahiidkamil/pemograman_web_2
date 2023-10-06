<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['id', 'email', 'password', 'Nama', 'Nama_belakang', 'alamat', 'telepon', 'avatar'];
    use HasFactory;
}
