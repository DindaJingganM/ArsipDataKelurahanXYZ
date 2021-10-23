<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataarsip extends Model
{
    public function categorys(){
    return $this->belongsTo(category::class,'id_kategori');
}
}
