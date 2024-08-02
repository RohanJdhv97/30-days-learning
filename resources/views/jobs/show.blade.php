<x-layout>
    <x-slot:headingSlot> Jobs page Heading</x-slot:headingSlot>
    <h1>{{ $job->title }}</h1>
    <p>This job offers {{ $job->salary}} Salery</p>

    <div class="mt-5">
        @can('edit-job', $job)
            <x-button href="/job/{{ $job->id }}/edit">Edit</x-button>
            <button form="delete-form">Delete</button>
        @endcan
    </div>

    <form method="POST" action="/job/{{$job->id}}" class="hidden" id="delete-form">
        @csrf
        @method("DELETE")
    </form>
</x-layout>