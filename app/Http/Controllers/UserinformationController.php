<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserinformationController extends Controller
{
        //ユーザー情報表示処理
        public function index()
        {
            $user = Auth::user();
            return view('userinformation.mypage',compact('user'));
        }
}
