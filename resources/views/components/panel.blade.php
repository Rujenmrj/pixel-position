@php
    $classes= "flex gap-x-6 bg-white/5 rounded-xl p-4 border border-transparent hover:border-blue-800 group transition-colors duration-800"
@endphp

<div {{ $attributes(["class"=>$classes]) }}>
    {{ $slot }}
</div>
