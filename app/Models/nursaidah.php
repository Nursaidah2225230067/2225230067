<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nursaidah extends Model
{
    use HasFactory;
    protected $table= "nursaidah";
    protected $fillable=['Nama', 'Nim', 'Kelas', 'Jurusan', 'Semester', 'Alamat'];
}
