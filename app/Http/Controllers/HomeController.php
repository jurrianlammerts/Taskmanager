<?php

namespace todoapp\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use todoapp\Item;

class HomeController extends BaseController
{

    public function getIndex() {
        $items = Auth::user()->items;

        return View::make('home', array(
            'items' => $items
        ));
    }

    public function postIndex() {
        $id = Input::get('id');


        $item = Item::findOrFail($id);

        if ($item->owner_id == $userId) {
            $item->mark();
        }

        return Redirect::route('/');
    }

    public function getNew() {
        return View::make('new');
    }

    public function postNew() {

    }
}
