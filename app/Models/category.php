<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function arsips(){
        return $this->hasMany(dataarsip::class,'id_kategori','id');
    }
}

