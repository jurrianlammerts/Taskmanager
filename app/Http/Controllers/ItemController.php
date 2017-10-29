<?php

namespace todoapp\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use todoapp\Http\Controllers\Redirect;
use todoapp\Item;

class ItemController extends BaseController
{

    public function getIndex()
    {
        if ($user = Auth::user()) {
            $items = Auth::user()->items;

            return View::make('home', array('items' => $items));
        } else {
            return Redirect('/login');
        }
    }

    public function postIndex()
    {
        $id = Input::get('id');

        $item = Item::findOrFail($id);

        if ($item->owner_id == Auth::user()->id) {
            $item->mark();
        }
        return Redirect('/');
    }

    public function getNew()
    {
        return View::make('new');
    }

    public function postNew()
    {
        $rules = array('name' => 'required|min:3|max:255');
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect('new')->withErrors($validator);
        } else {

            $item = new Item;
            $item->done = false;
            $item->name = Input::get('name');
            $item->owner_id = Auth::user()->id;
            $item->save();

            return Redirect('/');
        }
    }

    public function getDelete(item $item)
    {
        if ($item->owner_id == Auth::user()->id) {
            $item->delete();
        }

        return Redirect('/');
    }
}

