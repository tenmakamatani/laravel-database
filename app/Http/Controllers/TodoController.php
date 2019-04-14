<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $req) {
        $items = Todo::all();
        return view('todo.index', ['items' => $items]);
    }

    public function find(Request $req) {
        return view('todo.find',['input' => '']);
    }

    public function search(Request $req) {
        $item = Todo::nameEqual($req->input)->first();
        return view('todo.find', [
            'input' => $req->input,
            'item' => $item
        ]);
    }

    public function add(Request $req) {
        return view('todo.add');
    }

    public function create(Request $req) {
        $this->validate($req, Todo::$rules);
        $todo = new Todo;
        $todo->name = $req->name;
        $todo->content = $req->content;
        $todo->save();
        return redirect('/todo');
    }
}
