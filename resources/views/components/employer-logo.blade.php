@props(['employer','width'=>90])

<img src="{{ asset('storage/'.$employer->logo) }}" alt="employer logo" class="rounded-xl" width={{ $width }}>
{{-- <img src="https://picsum.photos/seed/{{ rand(1,1000) }}/{{ $width }}" alt="" class="rounded-xl" crossorigin="anonymous"> --}}
{{-- <img src="https://picsum.photos/200/300" alt="Random Image"  --}}

