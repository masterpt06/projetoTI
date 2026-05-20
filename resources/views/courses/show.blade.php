<x-layouts::main-content :title="$tshirtImage->name"
                        :heading="'Tshirt'. $tshirtImage->name">
    <div class="flex flex-col space-y-6">
        <div class="max-full">
            <section>
                <div class="mt-6 space-y-4">
                    @include('courses.partials.fields', ['mode' => 'show'])
                </div>
                @include('partials.form-buttons',[
                        'entity' => 'course',
                        'value' => $tshirtImage,
                        'new' => Gate::check('create', \App\Models\Tshirt_image::class),
                        'edit' => Gate::check('update', $tshirtImage),
                        'delete' => Gate::check('delete', $tshirtImage)
                        ])

                <!--@if($tshirtImage->disciplines->isEmpty())
                    <p class="mt-12 text-xl text-gray-700 dark:text-gray-300">
                        This course has no assigned disciplines.
                    </p>
                @else
                    @can('viewCurriculum', \App\Models\Course::class)
                        <h3 class="pt-16 pb-4 text-xl font-medium text-gray-700 dark:text-gray-300">
                            Curriculum
                        </h3>
                        <x-courses.curriculum :disciplines="$course->disciplines"
                                            :showView="true"
                                            class="pt-4"
                        />
                    @endcan
                @endif-->
            </section>
        </div>
    </div>
    <form id="delete-form" method="POST" action="{{ route('courses.destroy', ['course' => $tshirtImage]) }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layouts::main-content>
