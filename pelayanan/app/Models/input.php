<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input extends Model
{
    use HasFactory;
    protected $table = 'input'; // Nama tabel
    protected $primaryKey = 'id_input'; // Primary key
}