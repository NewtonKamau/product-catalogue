<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='products';

  protected $primaryKey='id';

  protected $fillable=['product_name','category'];

  // defining the relationship with category
   public function category()
  {
    return $this->hasOne('App\Category','foreign_key');
  }
}
