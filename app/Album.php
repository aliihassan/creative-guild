<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'featured' => 'boolean',
    ];

    public function photographer()
    {
        return $this->belongsTo('App\Photographer');
    }
}
