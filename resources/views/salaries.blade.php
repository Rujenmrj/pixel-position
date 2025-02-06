<x-layout>
    <x-page-heading>
        Salaries
    </x-page-heading>
    <div class="mt-6 space-y-6">
        @foreach($jobs as $job)
            <x-job-card-extend :$job />
        @endforeach
    </div>
</x-layout>
