<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Like;

class PostController extends Controller
{

    //一覧表示処理
    public function index()
    {
        $posts = Record::all()->sortByDesc('created_at');
        return view('post.post_index', ['posts' => $posts]);
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
        return redirect()->route('post.index');
    }

    //削除処理
    public function destroy($id)
    {
        Record::where('id', $id)->delete();
        return redirect()->route('post.index');
    }

    //いいね処理
    //いいねが表示されない record_idがnullになる
    public function like(Request $request,Record $record)
    {
        $like = new Like;
        $like->user_id = $request->user()->id;
        $like->record_id = $record->id;
        $like->save();

        // $record->likes()->detach($request->user()->id);
        // $record->likes()->attach($request->user()->id);

        return [
            'id' => $record->id,
            'countLikes' => $record->count_likes,
        ];
    }

    //いいね解除処理
    public function unlike(Request $request,Record $record)
    {
        $record->likes()->detach($request->user()->id);

        return [
            'id' => $record->id,
            'countLikes' => $record->count_likes,
        ];
    }
}
