<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name'];

    public function customization()
    {        
        return $this->hasMany('App\Dish\Models\Customization');
    }
}
