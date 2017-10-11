<?php

namespace todoapp;

use Eloquent;

class Item extends Eloquent
{
    public $timestamps = false;

    public function mark() {
        $this->done = $this->done ? false : true;
        $this->save();
    }
}
