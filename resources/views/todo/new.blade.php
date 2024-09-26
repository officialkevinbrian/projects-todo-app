@extends('layouts.todo')

@section('content')
<div class="p-3 gap-3 flex flex-col flex-1 ">
    <div class="gap-3 flex flex-col">
        <a href="/todos"
            class=" w-10 h-10  self-start border p-1 rounded-full text-center flex flex-col justify-center items-center">
            <span class=" font-bold">X</span>
        </a>
        <h1 class=" text-2xl font-bold">Nova Tarefas</h1>
        <div>
            <button class="bg-black text-white p-1 px-5 rounded-full">Today</button>
            <button class="bg-transparent text-black border p-1 px-5 rounded-full">Tomorrow</button>
        </div>
    </div>

    <form action="/todos/new" method="POST" class=" flex-1 flex flex-col">

        <div class=" flex flex-col gap-3 flex-1 ">
            <h6>Title</h6>

            @csrf
            <input class="border rounded-full p-2" placeholder="Coloque o titulo da sua tarefa aqui!" type="text"
                name="title" required />
            <input placeholder="Descricao (opcional)" class="border rounded-full p-2" name="status" />

        </div>

        <div class="flex">
            <button class="bg-black text-white flex-1 p-2 rounded-full font-semibold">Criar</button>
        </div>
    </form>

</div>

@endsection()