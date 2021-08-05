@props([
  'href' => '#',
  'newtab' => false,
])

<a href="{{$href}}"
{{ $attributes->merge(['class' => '
  block rounded
  px-4 py-2
  text-sm font-semibold

  text-x-gray-200
  bg-tranparent

  bg-opacity-5

  hover:text-white
  hover:bg-olivia-blue-dark
  focus:text-white
  focus:bg-olivia-blue-dark
']) }}
@if ($newtab)
  target="_blank"
@endif
>{{$slot}}</a>