<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //

    public function index()
    {

        $result = Todo::get();

        // dump($result);

        $projectsCategory = $result;

        return view('todo.index')->with('name', 'Kevin Brian')->with('projectsCategory', $projectsCategory);
    }

    /**
     * Funcao que guarda na DB
     */
    public function store(Request $request)
    {


        //insert some data in Todo

        $data = $request->all();
        $result;

        if($data){
            $result = Todo::create(["title"=>$data['title'], "status" => "PENDING"]);
        }

        if(isset($result)){
            return redirect('/todos');
            
        }
        
        return view('todo.new');

        
    }
}
