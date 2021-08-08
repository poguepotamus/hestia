<x-head class="md:flex flex-col md:flex-row w-full">

  <x-nav.sidebar></x-nav.sidebar>

  <div {{$attributes}}>
    {{$slot}}
  </div>

</x-head>