<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Services extends Model
{
    // use HasFactory;
    // protected $fillable = ['nama_bidangilmu'];
    protected $table = 'penyiraman';
    protected $primaryKey = 'id';
}
