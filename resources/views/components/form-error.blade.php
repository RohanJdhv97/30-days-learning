@props(['name'])

@error($name)
<p class="text-red-500 p-1">{{ $message }}</p>
@enderror