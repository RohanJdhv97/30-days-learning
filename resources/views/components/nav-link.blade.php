 @props(['active' => false, 'type'=>'link'])
 @if($type == 'link')
 <a {{ $attributes }} class="{{ $active ? 'bg-gray-300 font-semibold leading-6 p-1.5 rounded-md text-gray-900 text-sm':'text-sm font-semibold leading-6 text-gray-900 p-1.5 rounded-md' }}"> {{ $slot }} </a>
 @else
 <button {{ $attributes }} class="{{ $active ? 'bg-gray-300 font-semibold leading-6 p-1.5 rounded-md text-gray-900 text-sm':'text-sm font-semibold leading-6 text-gray-900 p-1.5 rounded-md' }}"> {{ $slot }} </button>
 @endif