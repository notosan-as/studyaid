<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\StudyRecord;
use App\Like;

class PostController extends Controller
{

    //一覧表示処理
    public function index()
    {
        $posts = Record::all()->sortByDesc('created_at');
        $studies = StudyRecord::all();
        $records = StudyRecord::get(['record_id']);

        return view('post.post_index', compact('posts','studies','records'));
    }

    //投稿画面表示
    public function create()
    {
        return view('post.post_create');
    }

    //投稿処理
    public function store(Request $request)
    {
        $post = new Record;
        $post->memo = $request->body;
        $post->user_id = $request->user()->id;
        $post->save();
        session()->flash('flash_message', '投稿が完了しました');

        return redirect()->route('post.index');

    }

    //個別表示
    public function show()
    {
    }

    //編集画面表示
    public function edit($id)
    {
        $post = Record::find($id);
        return view('post.post_edit',['post' => $post]);
    }

    //編集処理
    public function update(Request $request,$id)
    {
        $update = ['memo' => $request->memo ];
        Record::where('id',$id)->update($update);
        session()->flash('flash_message', '編集が完了しました');

        return redirect()->route('post.index');
    }

    //削除処理
    public function destroy($id)
    {
        Record::where('id', $id)->delete();
        session()->flash('flash_message', '投稿を削除しました');

        return redirect()->route('post.index');
    }

}
