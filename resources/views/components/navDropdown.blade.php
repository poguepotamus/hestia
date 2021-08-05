@props([
  'title' => 'Dropdown'
])


<div
  @click.away="open = false"
  class="relative"
  x-data="{ open: false }">

  {{-- Dropdown button --}}
  <button
    @click="open = !open"
    class="flex flex-row items-center
    w-full rounded md:block
    px-4 py-2 mt-2
    text-sm font-semibold text-left text-x-gray-200
    bg-transparent

    hover:text-white
    hover:bg-olivia-blue-dark

    focus:outline-none
    focus:shadow-outline">

    {{$title}}

    <x-icons.dropdownArrow></x-icons.dropdownArrow>
  </button>


  {{-- Dropdown content --}}
  <div
    x-show="open"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="absolute right-0 w-full origin-top-right shadow-lg">

    <div {{ $attributes->merge(['class' => 'p-2 rounded shadow bg-x-gray-700']) }}>
      {{$slot}}
    </div>

  </div>

</div>
