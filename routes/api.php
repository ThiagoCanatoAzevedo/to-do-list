<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TodoController;

/* 
Usando apiResource, já é liberado as seguintes rotas:

GET /api/todos - Listar todas as tarefas
POST /api/todos - Criar uma nova tarefa
GET /api/todos/{id} - Obter uma tarefa específica
PUT /api/todos/{id} - Atualizar uma tarefa
DELETE /api/todos/{id} - Excluir uma tarefa 
*/

Route::apiResource('todos', TodoController::class);


