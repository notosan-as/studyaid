<?php

namespace App\Http\Controllers;

use App\Item;
use App\StudyRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SetupRequest;

class SetupController extends Controller
{
    //学習内容を前表示
    public function index()
    {
        $auth = Auth::id();
        $items = Item::where('user_id',$auth)->orderBy('id')->get();
        return view('setup.study_setup',['items' => $items]);
    }

    //学習内容の追加画面表示
    public function create()
    {
        return view('setup.study_setup_add');
    }

    //学習内容の追加処理
    public function store(SetupRequest $request)
    {
        $item = new Item;
        $item->item = $request->item;
        $item->user_id = $request->user()->id;
        $item->save();
        session()->flash('flash_message', '学習内容を追加しました');

        return redirect()->route('setup.index');
    }

    //学習内容の編集画面表示
    public function show($id)
    {
        $items = Item::find($id);
        return view('setup.study_setup_edit',['items' => $items]);
    }

    //学習内容の編集処理
    public function update(SetupRequest $request, $id)
    {
        $update = [ 'item' => $request->item ];
        Item::where('id',$id)->update($update);
        session()->flash('flash_message', '学習内容を編集しました');

        return redirect()->route('setup.index');
    }

    //学習内容の削除処理
    public function destroy($id)
    {
        $find = StudyRecord::where('item_id',$id)->first();

        if($find){

            session()->flash('flash_message', '学習時間を記録している項目は削除できません');
            return back();

        }else{

            Item::where('id', $id)->delete();
            session()->flash('flash_message', '削除しました');
        }

        return redirect()->route('setup.index');
    }
}
