<x-layouts::main-content :title="$department->name"
                        :heading="'Department '. $department->name">
    <div class="flex flex-col space-y-6">
        <div class="max-full">
            <section>
                <div class="mt-6 space-y-4">
                    @include('departments.partials.fields', ['mode' => 'show'])
                </div>
                @include('partials.form-buttons', ['entity' => 'department', 'value' => $department, 'new' => true, 'edit' => true, 'delete' => true])
            </section>
        </div>
    </div>
    <form id="delete-form" method="POST" action="{{ route('departments.destroy', ['department' => $department]) }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layouts::main-content>
