<?php

namespace todoapp;

use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    public $timestamps = true;

    public function items () {
        return $this->hasMany(Item::class, 'user_id');
    }
}
