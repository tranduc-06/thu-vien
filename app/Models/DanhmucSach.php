<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucSach extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Tendanhmuc'];
    protected $primaryKey = 'id_Danhmuc';
    protected $table = 'theloai';
}
