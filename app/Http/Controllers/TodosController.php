<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

    	$todos=Todo::all();
    	return view ('todos')->with('todos' , $todos);
    }


    public function store (Request $request){

    	$todo= new Todo;
    	$todo->todo=$request->todo;
    	$todo->save();
    	return redirect()->back();
    }

    public function delete($id){

    	$todo= Todo::find($id);
    	$todo->delete();
    	return redirect()->back();
    }

    public function update($id){
    	$todo= Todo::find($id);
    	return view('update')->with('todo', $todo);
    }
    public function save (Request $request, $id){

    	if(!is_null($id))
    	{
    		echo 'error';
    	}
    	$todo=Todo::find($id);
    	$todo->todo=$request->todo;
    	$todo->save();
    	return redirect()->back(); 
    	 

    }

    public function completed ($id){
    	$todo=Todo::find($id);
    	$todo->completed=1;
    	$todo->save();
    	return redirect()->back(); 

    }
}
