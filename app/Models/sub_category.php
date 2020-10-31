<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    use HasFactory;

    protected $table = 'sub_category';

    public function category(){
        return $this->belongsTo('App\Models\category');
    }
}
