<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

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
    public function edit()
    {
        $post = new Record;
        return view('post.post_edit',['post' => $post]);
    }

    //編集処理
    public function update()
    {
    }

    //削除処理
    public function destroy()
    {
    }
}
