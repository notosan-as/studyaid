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
        $records = StudyRecord::get(['record_id'])->toArray();

        return view('post.post_index', compact('posts','records'));
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
        $query = StudyRecord::query();
        $query->where('record_id',$id);
        $studies = $query->get();

        return view('post.post_edit',compact('post','studies'));
    }

    //編集処理
    public function update(Request $request,$id)
    {

        $memo = $request->get('memo');
        Record::where('id',$id)->update([ 'memo' => $memo ]);

        $studyid = $request->get('studyid');
        $times = $request->get('time');

        if(isset( $studyid ))
        {
            $studies = array_combine($studyid,$times);

            foreach($studies as $key => $study)
            {
                StudyRecord::where('id',$key)->update([ 'time' => $study ]);
            }
        }

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
