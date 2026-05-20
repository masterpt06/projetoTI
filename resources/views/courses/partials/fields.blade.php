@php
    $mode = $mode ?? 'edit';
    $readonly = $mode == 'show';
@endphp


<div class="flex flex-col sm:w-64 items-center space-y-2">

    <p class="text-sm text-gray-600 dark:text-gray-300 text-center">
        {{ $tshirtImage->image_url ?? 'No image uploaded' }}
    </p>

    @if($tshirtImage->photoFullUrl)
        <img
            src="{{ $tshirtImage->photoFullUrl }}"
            class="w-64 h-64 object-cover rounded-xl border"
        >
    @else
        <div class="w-64 h-64 flex items-center justify-center border text-gray-400">
            No image
        </div>
    @endif

</div>