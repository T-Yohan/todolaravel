<form action="{{route('add')}}" method="post">
    @csrf
<div class="flex mt-4">
    <input name="task" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker font-serif" placeholder="Que dois-je faire ?">
    <button class="font-serif flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Ajouter</button>
</div>
</form>
    @error('task')
        <p class="text-red-700 p-1 font-serif">{{$message}}Vous devez saisir une tâche !</p>
    @enderror
