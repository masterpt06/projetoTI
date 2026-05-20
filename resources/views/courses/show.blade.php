<x-layouts::main-content :title="$tShirtImage->name"
                        :heading="'Tshirt'. $tShirtImage->name">
    <div class="flex flex-col space-y-6">
        <div class="max-full">
            <section>
                <div class="mt-6 space-y-4">
                    @include('courses.partials.fields', ['mode' => 'show'])
                </div>
                @include('partials.form-buttons',[
                        'entity' => 'tShirtImage',
                        'value' => $tShirtImage,
                        'new' => Gate::check('create', \App\Models\Tshirt_image::class),
                        'edit' => Gate::check('update', $tShirtImage),
                        'delete' => Gate::check('delete', $tShirtImage)
                        ])
                

                
            </section>
        </div>
    </div>
    
</x-layouts::main-content>
