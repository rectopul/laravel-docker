<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['customization_id', 'name', 'image', 'price'];

    public function custom()
    {        
        return $this->belongsTo('App\Models\Customization');
    }
}
