<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'price', 'category_id'];

    public function category() {
      return $this->belongsTo('App\Category');
    }

}
