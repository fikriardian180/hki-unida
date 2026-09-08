<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $table = 'mereks';

    // Mengizinkan semua field/kolom disimpan
    protected $guarded = [];
}