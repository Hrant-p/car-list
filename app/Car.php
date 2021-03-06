<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'img', 'year', 'price' , 'model_id', 'user_id'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
