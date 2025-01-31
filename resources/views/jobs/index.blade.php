<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">
                Let's Find Your Next Job
            </h1>
            <x-forms.form action="/search" class="mt-6">
              <x-forms.input :label="false" name="q" placeholder="Web Developer" class="outline-none" />
            </x-forms-form>

        </section class="pt-10">
        <section>
            <x-section-heading>
                Featured Jobs
            </x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6 sm:grid-cols-2">
                @foreach($featured as $job)
                <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                <x-job-card-extend :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
