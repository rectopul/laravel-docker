<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    protected $fillable = ['type_id', 'name', 'description'];

    public function type()
    {        
        return $this->belongsTo('App\Dish\Models\Type');
    }
    public function products()
    {        
        return $this->hasMany('App\Dish\Models\ProductCustomization');
    }
    public function options()
    {        
        return $this->hasMany('App\Dish\Models\Option');
    }
}
