<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
       protected $fillable = [
        'name', 'quantity', 'color_id','category_id',
           ];
}
