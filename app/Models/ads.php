<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Post
 *
 * @mixin Builder
 */
class ads extends Model
{
    use HasFactory;

    public function sub_category()
    {
        return $this->belongsTo('App\Models\sub_category');
    }

    public function category()
    {
        return $this->hasOneThrough(
            'App\Models\category',
            'App\Models\sub_category',
            'id',
            'id',
            'id',
            'id',
        );
    }
}
