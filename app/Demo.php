<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'demo';
    protected $fillable=['title','address','email','price','status'];
}
