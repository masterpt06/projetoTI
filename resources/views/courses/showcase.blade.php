<x-layouts::main-content title="List of tshirts">
    <div class="flex flex-col">
        @each('courses.partials.cards', $courses, 'course')
    </div>
</x-layouts::main-content>
