<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function homepage(){
        return view('homepage');
    }
    public function allTodo(){
        return view('todo.allTodo');
     }
    public function store(){
        return view('todo.store');
    }
    function submitTodo(Request $request)
    {
        $request->validate(
            [
            'name' => 'required',
            'title' => 'required',
            'detail' => 'required|max:300'
            ]
    );
    //* Store database
    $todo = new todo();
    $todo->name = $request->name;
    $todo->title = $request->title;
    $todo->detail = $request->detail;
    $todo->status = true;


    $todo->save();
    return back();
    } 
}
