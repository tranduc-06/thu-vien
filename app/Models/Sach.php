<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['tensach','tentacgia','id_Danhmuc','nhaxuatban','namxuatban','hinhanh','tomtat'];
    protected $primaryKey = 'id_Sach';
    protected $table = 'sach';
}
