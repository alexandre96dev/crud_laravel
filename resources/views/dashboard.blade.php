<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                @foreach(Auth::user()->books as $book) 
                    <div class="px-6 py-3">
                    {{$book->name }}<br>
                    {{$book->autor}}<br>
                    {{$book->genero}}<br>
                    {{$book->ano}}<br>
                    </div>
                  @endforeach
                  <form method="POST" action="{{route ('create_book')}}">
                  @csrf
                  <x-input id="name" class="block mt-1 w-full" type="name" name="name" placeholder="name"/>
                  <x-input id="autor" class="block mt-1 w-full" type="autor" name="autor" placeholder="autor"/>
                  <x-input id="genero" class="block mt-1 w-full" type="genero" name="genero" placeholder="genero"/>
                  <x-input id="ano" class="block mt-1 w-full" type="ano" name="ano" placeholder="ano"/>
                  <x-button>Salvar</x-button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
