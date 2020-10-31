<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

/**
 * Post
 *
 * @mixin Builder
 */

class cities extends Model
{
    use HasFactory;

    public function ads() {
        return $this->hasMany('App\Models\ads','city_id', 'INSEE');
    }
}
