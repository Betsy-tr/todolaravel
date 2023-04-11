@extends('layouts.app')
@section('main')

<!-- component --> <!-- bg-[url('')] --> 
<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans bg-black/30">
	<div class="ombre-2XL border-double border-4 backdrop-blur-md bg-white/30 bg-gradient-to-r from-yellow-500 to-pink-500 rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">
            <i><h1 class="text-4xl underline decoration-2 subpixel-antialiased font-serif text-center text-black">MY TO DO LIST</h1></i> 
            <x-task.form/>
           
            
        </div>
        <div class="mt-4">
            <div class="inline-flex mt-2 xs:mt-0">
                <a href="{{route('tri',['desc','all'])}}"
                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-serif py-2 px-4 rounded-l">
                    ALL
                </a>
                <a href="{{route('tri',['desc','active'])}}"
                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-serif py-2 px-4">
                    ACTIVE
                </a>
                <a href="{{route('tri',['desc','inactive'])}}"
                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-serif py-2 px-4 rounded-r">
                    INACTIVE
                </a>
            </div>
            <div class="inline-flex mt-2 xs:mt-0">
                <a href="{{route('sort','asc')}}"
                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-serif py-2 px-4 rounded-l">
                    ASC
                </a>
                <a href="{{route('sort','desc')}}"
                    class="text-sm text bg-gray-300 hover:bg-gray-400 text-gray-800 font-serif py-2 px-4 rounded-r">
                    DESC
                </a>
            </div>
        </div>
        <div>

            @forelse ( $todos as $itemTodo )
            <x-task.tache :itemTodo='$itemTodo'/>
            
            @empty
                <i><p class="font-bold text-red-700">Vous n'avez pas de tâche !</p></i>
            @endforelse
            

            <!-- 
            @foreach ($todos as $todo )
            <div class="flex mb-4 items-center">
                <p class="w-full text-grey-darkest">{{$todo->task}}</p>
                <a href="{{route('upd', $todo->id)}}" class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Done</a>
                <a href="{{route('del',$todo->id)}}" class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</a>
            </div>    
            @endforeach
        -->
            
        </div>
    </div>
</div>

@endsection