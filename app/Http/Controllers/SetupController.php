<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('setup.study_setup',['items' => $items]);
    }

    public function create()
    {
        return view('setup.study_setup_add');
    }

    public function store(Request $request)
    {
        $item = new Item;
        $item->item = $request->item;
        $item->user_id = $request->user()->id;
        $item->save();
        return redirect()->route('setup.index');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('setup.study_setup_edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $update = [ 'item' => $request->item ];
        Item::where('id',$id)->update($update);
        return redirect()->route('setup.index');
    }

    public function destroy($id)
    {
        Item::where('id', $id)->delete();
        return redirect()->route('setup.index');
    }
}
