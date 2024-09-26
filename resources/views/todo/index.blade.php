@extends('layouts.todo')

@section('content')

<div class="flex-1 flex flex-col">
    <div class="p-4 flex flex-col gap-3">
        <div>
            <h6>Hello, Kevin Brian</h6>

            <div class="flex flex-row justify-between items-center">
                <div class="flex flex-col">
                    <h2 class=" text-2xl font-bold">Your</h2>
                    <h2 class=" text-2xl font-bold">Projects (5)</h2>
                </div>
                <div class=" w-12 h-12 rounded-full overflow-hidden">
                    <img
                        src="https://images.pexels.com/photos/4126749/pexels-photo-4126749.jpeg?auto=compress&cs=tinysrgb&w=400" />
                </div>
            </div>
        </div>

        <div class="bg-black h-64 text-white p-3 rounded-2xl flex flex-col justify-between">
            <h4 class=" font-bold text-3xl w-[60%]">Hilidays in Norway</h4>

            <div>
                <div class="flex flex-row gap-2">
                    <div class="border rounded-full overflow-hidden flex flex-col w-4 h-14 justify-end">
                        <div class="bg-white h-[60%] rounded-full"></div>
                    </div>

                    <div>
                        <h5 class=" font-bold">5/10</h5>
                        <h6 class=" font-light text-sm">tasks</h6>
                    </div>
                </div>
            </div>

            <div class=" flex flex-row justify-between">
                <a class="border border-white w-10 h-10 rounded-full justify-center flex">...</a>
                <a href="/todos/new"
                    class="border border-white w-10 h-10 rounded-full justify-center flex items-center">+</a>
            </div>
        </div>
    </div>
</div>

@endsection()