<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentsController extends Controller
{

     //投稿処理
    public function store(CommentRequest $request)
    {
        $comment = new Comment;
        $comment->user_id = $request->user()->id;
        $comment->record_id = $request->post_id;
        $comment->comment = $request->comment;
        $comment->save();

        session()->flash('flash_message', 'コメントを投稿しました');

        return redirect()->route('post.index');
    }
}
