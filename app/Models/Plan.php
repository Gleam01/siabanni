<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'stripe_plan',
        'cost',
        'description',
        'training_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function training()
    {
        return $this->belongsTo('App\Models\Training');
    }
}
