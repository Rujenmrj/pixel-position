<x-layout>
    <x-page-heading>Companies</x-page-heading>
    <div class="grid grid-cols-4 gap-5">
        @foreach($employers as $employer)
            <x-companies-card :employer="$employer" />
        @endforeach
    </div>
</x-layout>
