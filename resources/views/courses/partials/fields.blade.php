@php
    $mode = $mode ?? 'edit';
    $readonly = $mode == 'show';
@endphp


<div class="flex flex-col sm:w-64 items-center space-y-2">

    <p class="text-sm text-gray-600 dark:text-gray-300 text-center">
        {{ $tShirtImage->image_url ?? 'No image uploaded' }}
    </p>

    @if($tShirtImage->photoFullUrl)
        <img
            src="{{ $tShirtImage->photoFullUrl }}"
            class="w-64 h-64 object-cover rounded-xl border"
        >
    @else
        <div class="w-64 h-64 flex items-center justify-center border text-gray-400">
            No image
        </div>
    @endif

</div>