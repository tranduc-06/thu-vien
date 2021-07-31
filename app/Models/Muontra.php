<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muontra extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id_Sach','id','ngay_Muon','ngay_Hentra','ngay_Tra','tinhtrang'];
    protected $primaryKey = 'id_Sach,id';
    protected $table = 'muontra';
    
    public function sach()
    {
        return $this->belongsTo('App\Models\Sach', 'id_Sach','id_Sach');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id','id');
    }
}
