<x-layout>
    <x-slot:headingSlot> Jobs page Heading</x-slot:headingSlot>
    <ul>
         @foreach($jobs as $job)
            <li>
               <a href="/job/{{ $job['id'] }}">
                  <strong>{{ $job['title'] }}: </strong> Pays {{ $job['pay'] }} per year.
               </a>
            </li>
         @endforeach
   </ul>
</x-layout>