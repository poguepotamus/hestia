<x-layout class="relative w-screen h-screen -mt-4 md:mt-0 bg-x-gray-700">

  {{-- Banner --}}
  <div class="
    flex w-full
    space-x-4 md:space-x-16
    h-20 md:h-40
    mt-4 md:mt-16
    px-4 md:px-16
    bg-x-gray-800">

    {{-- Profile image --}}
    <img class="self-center
      w-24 h-24
      md:w-52 md:h-52
      bg-x-gray-500
      rounded-full
      border-2 md:border-4 border-olivia"
    src="https://avatars.githubusercontent.com/u/15990062?u=319cd944941244aba5b0fc978a2b7cb2abb0ef7f"
    alt="Matthew Pogue">

    {{-- Text --}}
    <p class="self-center
      text-lg md:text-4xl font-semibold tracking-widest uppercase font-title
      text-gray-900 dark:text-white
      focus:outline-none focus:shadow-outline">
      About <span class="text-olivia">me</span>
    </p>

  </div>

  <div class="md:w-2/3 mx-4 md:mx-auto px-8 py-8 md:py-12 bg-x">
    <h1>Introduction</h1>
    <p>My name is Matthew Pogue and I'm passionate about being a nerd. After earning my bachelors in Computer Science I started working as a Web Developer, but will deep-dive into anything I find interesting. </p>
  </div>

</x-layout>