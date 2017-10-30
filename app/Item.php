<?php

namespace todoapp;

use Eloquent;

class Item extends Eloquent
{
    public $timestamps = true;

    public function mark() {
        $this->done = $this->done ? false : true;
        $this->save();
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function list() {
        return $this->belongsTo('App\List');
    }
}
