<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function getPriceAttribute($price)
    {
        return '$' . number_format($price / 100, 2) . '/month';
    }
}
