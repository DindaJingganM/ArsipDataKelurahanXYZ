<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table='datas';
    protected $guarded=[];
    public function categorys(){
    return $this->belongsTo(category::class,'id_kategori');


}
}
