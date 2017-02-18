<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;

class todocontroller extends Controller
{
    //
    public function save(Request $request)
    {
        $todo= new todos;
        
        $todo->title=$request->title;
        $todo->save();
    }
    public function index() {
        return view('/todo');
    }
    public function indexShow()
    {
        return view('/show');

    }
    public function show()
    {
        $todo = new todos;
        $todos=$todo->all();
        return view ('show',['todos'=>$todos]);
    }
}
