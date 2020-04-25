<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    public function albums()
    {
        return $this->hasMany('App\Album');
    }
}
