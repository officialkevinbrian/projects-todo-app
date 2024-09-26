<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //

    public function index()
    {
        
        return view('todo.index')->with('name','Kevin Brian');
    }

    /**
     * Funcao que guarda na DB
     */
    public function store()
    {

        //insert some data in Todo
        Todo::create(['title' => "Estudar Laravel", "status" => "PENDING"]);

        //we use ::all static
        $getAllTodos = Todo::all();

        //we debug here to get all todos
        // dump($getAllTodos);
        return view('todo.new')->with('name','Kevin Brian');
    }
}
