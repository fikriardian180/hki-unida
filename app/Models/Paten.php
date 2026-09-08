<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paten extends Model
{
    use HasFactory;

    protected $table = 'patens';

    // Mengizinkan semua field/kolom disimpan
    protected $guarded = [];
}