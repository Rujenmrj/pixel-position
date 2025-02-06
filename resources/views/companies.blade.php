<x-layout>
    <x-page-heading>Companies</x-page-heading>
    <div class="grid grid-cols-4 sm:grid-cols-2 gap-5">
        @foreach($employers as $employer)
            <x-companies-card :employer="$employer" />
        @endforeach
    </div>
</x-layout>
