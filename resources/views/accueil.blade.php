@extends('layouts.app')

@section('main')
    <!-- component -->
    <div class="h-100 w-full flex items-center justify-center bgcolor font-sans">
        <<div class="rainbow-box rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">Todo List</h1>
                <x-task.form />
            </div>
            <div class="mt-4">
                <div class="inline-flex mt-2 xs:mt-0">
                    <a href="{{ route('tri', ['desc', 'all']) }}"
                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                        All
                    </a>
                    <a href="{{ route('tri', ['desc', 'active']) }}"
                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 ">
                        Actif
                    </a>
                    <a href="{{ route('tri', ['desc', 'inactive']) }}"
                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                        Inactif
                    </a>
                </div>

                <div class="inline-flex mt-2 xs:mt-0">
                    <a href="{{ route('sort', 'asc') }}"
                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                        ASC
                    </a>
                    <a href="{{ route('sort', 'desc') }}"
                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                        DESC
                    </a>
                </div>

            </div>
            <div>

                @forelse ($todos as $itemTodo)
                    <x-task.tache :itemTodo="$itemTodo" />

                @empty

                    <p class="font-bold text-color-500">Vous n'avez pas de tache</p>
                @endforelse
                {{ $todos->links() }}
                <!--
                  @foreach ($todos as $todo)
    <div class="flex mb-4 items-center">
                        <p class="w-full text-grey-darkest">{{ $todo->task }}</p>
                        <a href="{{ route('upd', $todo->id) }}" class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Done</a>
                        <a href="{{ route('del', $todo->id) }}" class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</a>
                    </div>
    @endforeach
                  -->
            </div>
    </div>
    </div>
@endsection
