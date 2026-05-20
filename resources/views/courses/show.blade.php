<x-layouts::main-content :title="$tshirtImage->name"
                        :heading="'Tshirt'. $tshirtImage->name">
    <div class="flex flex-col space-y-6">
        <div class="max-full">
            <section>
                <div class="mt-6 space-y-4">
                    @include('courses.partials.fields', ['mode' => 'show'])
                </div>
                @include('partials.form-buttons',[
                        'entity' => 'tshirtImage',
                        'value' => $tshirtImage,
                        'new' => Gate::check('create', \App\Models\Tshirt_image::class),
                        'edit' => Gate::check('update', $tshirtImage),
                        'delete' => Gate::check('delete', $tshirtImage)
                        ])

                
            </section>
        </div>
    </div>
    
</x-layouts::main-content>
