@extends('layouts.app')
@section('main')

<!-- component --> <!-- bg-[url('')] --> 
<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans bg-black/30">
	<div class="ombre-2XL border-double border-4 backdrop-blur-md bg-white/30 bg-gradient-to-r from-yellow-500 via-purple-500 to-pink-500 rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">
            <i><h1 class="text-4xl underline decoration-2 subpixel-antialiased font-serif text-center text-white">MY TO DO LIST</h1></i> 
            <form action="{{route('add')}}" method="post">
                @csrf
            <div class="flex mt-4">
                <input name="task" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker font-serif" placeholder="Que dois-je faire ?">
                <button class="font-serif flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Ajouter</button>
            </div>
            </form>
        </div>
        <div>

            @forelse ( $todos as $itemTodo )
            <div class="flex mb-4 items-center">
                @if ($itemTodo->status =='n')
                    <p class="w-full font-serif text-grey-darkest hover:text-indigo text-white text-base">{{$itemTodo->task}}</p>
                @else
                    <p class="w-full text-grey-darkest line-through">{{$itemTodo->task}}</p>
                @endif
                
                <a href="{{route('upd', $itemTodo->id)}}" class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Done<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
</svg>
</a>
                <a href="{{route('del',$itemTodo->id)}}" class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">remove<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="black" className="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </a>
            </div>
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