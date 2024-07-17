<x-layout>
    <x-slot:headingSlot> Jobs page Heading</x-slot:headingSlot>
    <h1>{{ $job['title'] }}</h1>
    <p>This job offers {{ $job['pay']}} Salery</p>
</x-layout>