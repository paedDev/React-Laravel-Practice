      @props(['tag', 'size' => 'base'])
      @php
          $classes = 'bg-white/10 hover:bg-white/50 transition-colors duration-300 font-bold';
          if ($size === 'base') {
              $classes .= ' px-5 py-2 rounded-xl text-sm';
          }
          if ($size === 'small') {
              $classes .= ' px-3 py-1 rounded-xl text-[0.625rem]';
          }

      @endphp
      <a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
