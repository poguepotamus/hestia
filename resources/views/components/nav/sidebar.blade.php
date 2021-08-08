<div @click.away="open = false"
class="flex flex-col flex-shrink-0 md:static md:w-64 h-full md:h-screen bg-x border-r-2 border-olivia"
x-data="{ open: false }">

  <div class="flex px-8 py-4 items-center justify-between">

    {{-- Sidebar Logo --}}
    <a href="/"
    class="text-lg font-semibold tracking-widest uppercase font-title
    text-gray-900 dark:text-white
    focus:outline-none focus:shadow-outline">
      Matthew <span class="text-olivia">Pogue</span>
    </a>

    {{-- Sidebar Expansion Button (small only) --}}
    <button @click="open = !open"
    class="text-white md:hidden focus:outline-none focus:shadow-outline">
      <x-icons.menu></x-icons.menu>
    </button>

  </div>


  {{-- Navigation buttons --}}
  <nav
  :class="{'block': open, 'hidden': !open}"
  class="px-4 pb-4 md:pb-0
  md:block space-y-2">

    <x-nav.link>Home</x-nav.link>
    <x-nav.link>Resume</x-nav.link>

    <x-nav.dropdown class="space-y-1" title="Socials & Links">

      <x-nav.link class="py-1 px-2" href="https://twitter.com/poguepotamus" newtab>
        <div class="flex space-x-2">
          <i class="fab fa-twitter w-4 self-center"></i>
          <p>Twitter</p>
        </div>
      </x-nav.link>

      <x-nav.link class="py-1 px-2" href="https://github.com/poguepotamus" newtab>
        <div class="flex space-x-2">
          <i class="fab fa-github w-4 self-center"></i>
          <p>GitHub</p>
        </div>
      </x-nav.link>

      <x-nav.link class="py-1 px-2" href="https://www.linkedin.com/in/poguepotamus/" newtab>
        <div class="flex space-x-2">
          <i class="fab fa-linkedin-in w-4 self-center"></i>
          <p>LinkedIn</p>
        </div>
      </x-nav.link>

    </x-nav.dropdown>
  </nav>


</div>
