<x-layouts::main-content title="Disciplines"
                        heading="List of disciplines"
                        subheading="Manage the disciplines offered by the institution">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl ">
        <div class="flex justify-start ">
            <div class="my-4 p-6 ">
                <div class="flex items-center gap-4 mb-4">
                    <flux:button variant="primary" href="{{ route('disciplines.create') }}">Create a new discipline</flux:button>
                </div>
                <div class="my-4 font-base text-sm text-gray-700 dark:text-gray-300">
                    @include('disciplines.partials.table', [
                        'disciplines' => $disciplines,
                        'showCourse' => true,
                        'showView' => true,
                        'showEdit' => true,
                        'showDelete' => true
                    ])
                </div>
                <div class="mt-4">
                    {{ $disciplines->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layouts::main-content>
