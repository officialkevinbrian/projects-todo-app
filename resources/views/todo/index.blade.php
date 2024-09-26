@extends('layouts.todo')

@section('content')

<div class="flex-1 flex flex-col">
    <div class="p-4 flex flex-col gap-3 flex-1">
        <div>
            @if (Route::has('login'))
            <div class="">
                @auth
                <a href="{{ url('/home') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth

                @guest
                <h4>Not logged in </h4>
                @else
                <h6>Hello, {{ Auth::user()->name }}</h6>

                @endguest
            </div>
            @endif


            <div class="flex flex-row justify-between items-center">
                <div class="flex flex-col">
                    <h2 class=" text-2xl font-bold">Your</h2>
                    <h2 class=" text-2xl font-bold">Projects ({{count($projectsCategory)}})</h2>
                </div>
                <div class=" w-12 h-12 rounded-full overflow-hidden">
                    <img
                        src="https://scontent.fmpm2-2.fna.fbcdn.net/v/t39.30808-1/435899609_2085579481811276_8570433524390406513_n.jpg?stp=c0.53.864.864a_dst-jpg_s200x200&_nc_cat=104&ccb=1-7&_nc_sid=50d2ac&_nc_ohc=iY9sPKr9r6gQ7kNvgHdaqVW&_nc_ht=scontent.fmpm2-2.fna&_nc_gid=AotW8PiLRQU2rxjJkXq94ZB&oh=00_AYCyveDOpWmyvw7yZNoxR8vL4SF9RDxHnKd9lN643rwJJA&oe=66FB2D23" />
                </div>
            </div>
        </div>

        <div class=" flex flex-col gap-3 flex-1">

            @empty($projectsCategory)
            <h3 class=" font-bold text-xl text-center self-center flex-1 items-center justify-center">No Projects</h3>
            @endempty()

            @foreach ( $projectsCategory as $category )
            <div class="bg-black h-64 text-white p-3 rounded-2xl flex flex-col justify-between bg-gradient-to-r from-pink-500 to-orange-500 hover:from-teal-400 hover:to-blue-500">
                <h4 class=" font-bold text-3xl w-[60%]">{{$category['title']}}</h4>

                <div>
                    <div class="flex flex-row gap-2">
                        <div class="border rounded-full overflow-hidden flex flex-col w-4 h-14 justify-end">
                            <div class="bg-white h-[60%] rounded-full"></div>
                        </div>

                        <div>
                            <h5 class=" font-bold">{{$category['remainingTasks']}} / {{$category['totalTasks']}}</h5>
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
            @endforeach
        </div>
    </div>
</div>

@endsection()