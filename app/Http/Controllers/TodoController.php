<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    /*
       make:authができない場合、composer.jsonを確認する
       "laravelcollective/html": "~6.0"の時はmake:authを使えないので
       "laravel/framework": "5.8.*"に変えてからターミナルでcomposer updateする
    */

    /*
    　初回にgithubにpushするときエラーが出る
    　公開鍵、秘密鍵を新たに作成すればpushできる
    　参考：https://qiita.com/GakuNaitou/items/81dbbd3ea6211af71648
    */

    /*
    　javaScript使いたい時はnpm installすれば使えるファイルが勝手に入れ替わる
    */
    public function index() {
        return view('todo.index');
    }
}
