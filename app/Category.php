<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='categories';

  protected $primaryKey='id';
  
  //defining the database relationship
   public function product()
  {
    return $this->hasMany('App\Product', 'foreign_key');
  }
}
