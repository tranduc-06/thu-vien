<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucSach extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['tendanhmuc'];
    protected $primaryKey = 'id_Danhmuc';
    protected $table = 'danhmuc';

    public function sach()
    {
        return $this->hasMany('App\Models\Sach');
    }
}
