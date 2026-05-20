<x-layouts::main-content title="List of tshirts">
    <div class="flex flex-col">
        @each('courses.partials.cards', $tShirtImages, 'tshirt')
        <div class="mt-4">
            {{ $tShirtImages->links() }}
        </div>
        
    </div>
</x-layouts::main-content>
