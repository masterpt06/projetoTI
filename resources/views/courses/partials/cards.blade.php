<div>
    <figure class="h-auto md:h-72 flex flex-col md:flex-row
                    rounded-none sm:rounded-xl
                    bg-zinc-50 dark:bg-gray-900
                    border border-zinc-200
                    my-4 p-8 md:p-0">

        <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72 mx-auto"
           href="{{ route('tshirts.show', ['tshirt' => $tshirt]) }}">

            <img class="h-full aspect-auto mx-auto rounded-full
                        md:rounded-l-xl md:rounded-r-none"
                 src="{{ $tshirt->photoFullUrl }}">
        </a>

        <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">

            <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-5"
               href="{{ route('tshirts.show', ['tshirt' => $tshirt]) }}">

                {{ $tshirt->name }}
            </a>

            <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                {{ $tshirt->description }}
            </p>

        </div>
    </figure>
</div>