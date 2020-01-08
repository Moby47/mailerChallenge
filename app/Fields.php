<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
     /**
     * Get the subscribers that owns the field.
     */
    public function subscribers()
    {
        return $this->belongsTo('App\Subscribers');
    }
}
