<!-- This was somthing I did after Video 3  assignment -->
<!-- <a href="/{{ $slot == 'Home' ? '' : strtolower($slot) }}"> {{ $slot }} </a> | -->

<!-- Correction after Video 4 -->
<a {{ $attributes }}> {{ $slot }} </a>