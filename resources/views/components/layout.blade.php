<x-head class="md:flex flex-col md:flex-row md:min-h-screen w-full">
  <div @click.away="open = false"
  class="flex flex-col flex-shrink-0
  w-full md:w-64
  bg-x"
  x-data="{ open: false }">

    {{-- Header --}}
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">

      {{-- Sidebar Logo --}}
      <a href="/"
      class="text-lg font-semibold tracking-widest uppercase font-title
      text-gray-900 dark:text-white
      focus:outline-none focus:shadow-outline">
        Matthew <span class="text-olivia">Pogue</span>
      </a>

      {{-- Sidebar Expansion Button --}}
      <button @click="open = !open"
      class="text-white md:hidden focus:outline-none focus:shadow-outline">
        <x-icons.menu></x-icons.menu>
      </button>

    </div>


    <nav
    :class="{'block': open, 'hidden': !open}"
    class="px-4 pb-4 md:pb-0
    flex-grow md:block space-y-2
    md:overflow-y-auto">
      <x-navlink>Blog</x-navlink>
      <x-navlink>Resume</x-navlink>
      <x-navlink>About Me</x-navlink>

      <x-navDropdown class="space-y-1" title="Socials & Links">
        <x-navlink class="py-1 px-2" href="https://twitter.com/poguepotamus" newtab>Twitter</x-navlink>
        <x-navlink class="py-1 px-2" href="https://github.com/poguepotamus" newtab>GitHub</x-navlink>
        <x-navlink class="py-1 px-2" href="https://www.linkedin.com/in/poguepotamus/" newtab>LinkedIn</x-navlink>
      </x-navDropdown>

    </nav>
  </div>

  <div {{ $attributes->merge(['class' => 'w-2/3 mx-auto mt-16']) }}>
    {{$slot}}
  </div>

</x-head>