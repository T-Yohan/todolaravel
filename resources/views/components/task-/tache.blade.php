<div class="flex mb-4 items-center">
    @if ($itemTodo->status == 'n')
        <p class="w-full font-serif text-grey-darkest hover:text-indigo text-black text-lg">{{ $itemTodo->task }}</p>
    @else
        <p class="w-full text-grey-darkest line-through">{{ $itemTodo->task }}</p>
    @endif


    <a href="{{ route('upd', $itemTodo->id) }}"
        class="font-serif flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">done<svg
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
            className="w-6 h-6">
            <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 12.75l6 6 9-13.5" />
        </svg>
    </a>
    <a href="{{ route('del', $itemTodo->id) }}"
        class="font-serif flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">remove<svg
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="black"
            className="w-6 h-6">
            <path strokeLinecap="round" strokeLinejoin="round"
                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>
    </a>
</div>
