<?php

namespace App\Http\Controllers;
use App\Models\Todo;


use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view ('welcome',['list'=>Todo::all()]);
    }

    public function saveTodo(Request $req)
    {



        $todoObj=new Todo();
        $todoObj->title= $req->todo;
        $todoObj->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/');
    }
    public function edit($id)
    {

        $data=Todo::find($id);
        return view('edit',compact('data'));

    }
    public function updateTodo(Request $req)
    {
        $todoObj =Todo::find($req->id);
        $todoObj->title=$req->todo;
        $todoObj->save();
        return redirect('/');
        


    }
}
