@props(['employer'])

<x-panel class="flex items-center justify-center">
    <div class="flex flex-col items-center ">
        <div>
            <x-employer-logo :employer="$employer" :width="100"/>
        </div>

        <div class="mt-4">
            <a href="{{ $employer->url }}">
                <h2 class="text-xl font-bold group-hover:text-blue-800 transition-colors duration-800 text-center">
                    {{ $employer->name }}
                </h2>
            </a>
        </div>
    </div>
</x-panel>
