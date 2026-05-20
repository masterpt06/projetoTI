@php
    $mode = $mode ?? 'edit';
    $readonly = $mode == 'show';
@endphp


<div class="flex flex-col sm:w-64 items-center space-y-2 sm:-mt-[1.5rem]">

    {{-- Nome da imagem --}}
    <p class="text-sm text-gray-600 dark:text-gray-300 break-all text-center">
        {{ $tshirtImage->image_file ?? $tshirtImage->image_url ?? 'No image uploaded' }}
    </p>

    {{-- Imagem --}}
    @if($tshirtImage->photoFullUrl)
        <img
            src="{{ $tshirtImage->photoFullUrl }}"
            alt="Course image"
            class="w-64 h-64 object-cover rounded-xl border border-gray-200 dark:border-gray-700"
        >
    @else
        <div class="w-64 h-64 flex items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 text-gray-400">
            No image
        </div>
    @endif

</div>