<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['tensach','slugsach','tentacgia','id_Danhmuc','nhaxuatban','namxuatban','hinhanh','soluong','giabia','tomtat'];
    protected $primaryKey = 'id_Sach';
    protected $table = 'sach';
    
    public function danhmucsach()
    {
        return $this->belongsTo('App\Models\DanhmucSach', 'id_Danhmuc','id_Danhmuc');
    }

    public function muontra()
    {
        return $this->hasMany('App\Models\Muontra');
    }
}
