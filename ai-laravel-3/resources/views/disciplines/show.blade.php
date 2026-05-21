<x-layouts::main-content :title="$discipline->name"
                        :heading="'Discipline '. $discipline->name">
    <div class="flex flex-col space-y-6">
        <div class="max-full">
            <section>
                <div class="mt-6 space-y-4">
                    @include('disciplines.partials.fields', ['mode' => 'show'])
                </div>
                @include('partials.form-buttons', ['entity' => 'discipline', 'value' => $discipline, 'new' => true, 'edit' => true, 'delete' => true])
            </section>
        </div>
    </div>
    <form id="delete-form" method="POST" action="{{ route('disciplines.destroy', ['discipline' => $discipline]) }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layouts.main-content>
