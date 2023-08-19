<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class PageController extends Controller
{
    public function index(){
        $topics = Topic::latest()->get();
        return view("index", ["topics" => $topics]);
    }

    public function save(Request $request){
        $topic = new Topic();

        if($request->name && $request->content){
            $topic->name = $request->name;
            $topic->content = $request->content;
            $topic->save();
        }

        return redirect("/");
    }

}
