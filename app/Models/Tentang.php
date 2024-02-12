<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    public $table = "projek";
    protected $primaryKey = "project_id";
    //tambahkan kode berikut
    protected $fillable = [
        'nmr_pesan','jdl_project','fitur','dnh_rmh','dnh_prjct','stat'
    ];
}