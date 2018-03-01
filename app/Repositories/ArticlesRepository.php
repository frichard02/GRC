<?php
/**
 * Created by PhpStorm.
 * User: frichard
 * Date: 27/02/2018
 * Time: 14:40
 */

namespace App\Repositories;


use App\article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesRepository
{
    public function save(Request $request, $id)
    {
        $article= new article();
        $article->titre = $request->titre;
        $article->message = $request->message;
        $article->user_id = $id;
        $article->save();
    }
    public function get($id){
        return article::where('user_id', $id)->get();
    }

    public function remove($id){
        return article::where('id', $id)->delete();
    }

    public function eagerLoading(){
        $test =  User::with(['articles' => function ($query) {
            $query->latest('message');
        }])->take(2)->get();
        echo $test;
    }

}