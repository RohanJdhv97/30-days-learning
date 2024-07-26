<x-layout>
   <x-slot:headingSlot> Jobs page Heading</x-slot:headingSlot>
   <div class="space-y-4">
      @foreach($jobs as $job)
      <a href="/job/{{ $job['id'] }}" class="block px-4 py-6 bg-gray-200 border-black-400 rounded-lg">
         <div>
            <strong class="color-blue">{{ $job->employer->name }}</strong>
         </div>
         <strong>{{ $job['title'] }}: </strong> Pays {{ $job['pay'] }} per year.<br><br>
      </a>
      @endforeach
   </div>

   <div class="mt-4">
      {{ $jobs->links() }}
   </div>
</x-layout>