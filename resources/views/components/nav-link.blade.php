@props(['active' => false, 'type'])

<a aria-current=" {{ $active ? 'page' : 'false'}} "
    class="rounded-md px-3 py-2 text-sm font-medium {{ $active ? "bg-gray-950/50 text-white" : "text-gray-300 hover:bg-white/5 hover:text-white"}}"
    {{$attributes}} >{{ $slot }} </a>
