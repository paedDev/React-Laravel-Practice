  @php
      $classes =
          'p-4 bg-white/5 rounded-xl  border-transparent hover:border-blue-800 border group transition duration-500';
  @endphp

  <div {{ $attributes(['class' => $classes]) }}>
      {{ $slot }}


  </div>
