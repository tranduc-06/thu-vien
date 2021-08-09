<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ddc extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['malopDDC','tenlopDDC,slugDDC'];
    protected $primaryKey = 'malopDDC';
    protected $table = 'ddc';

    public function sach()
    {
        return $this->hasMany('App\Models\Sach');
    }
}