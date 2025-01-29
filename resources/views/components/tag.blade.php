@props(['size'=>'base','tag'])

@php
    $classes='bg-white/10 rounded-xl font-bold hover:bg-white/20 transition-colors duration-300';
    if($size=='base'){
    $classes .= ' py-1 px-5 text-sm';
    }
    if($size=='small'){
    $classes .= ' py-1 px-3 text-2xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
