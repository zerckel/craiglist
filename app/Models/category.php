<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public function sub()
    {
        return $this->hasMany('App\Models\sub_category');
    }

    public function ads()
    {
        return $this->hasManyThrough('App\Models\ads', 'App\Models\sub_category');
    }
}
