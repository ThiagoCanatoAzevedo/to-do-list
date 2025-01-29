<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return response()->json(Todo::all());
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->validate(['task' => 'required|string']));
        return response()->json($todo, 201);
    }

    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json(['message' => 'Tarefa removida com sucesso']);
    }

    // public function update(){
    //     // atualiza tarefas
    // }
}
