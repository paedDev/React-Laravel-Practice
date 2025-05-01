<x-layout>
  <div class="text-center">
    <h2>Currently Available Ninjas</h2>
    {{-- blade directives conditional statement --}}
    @if ($greeting == "hello")
     <p>Hi from insde the if statement</p>
    @endif
    <p>{{$greeting}}</p>

    {{-- foreach  --}}
    <ul>
        @foreach($ninjas as $ninja)
            <li>
              <x-card href="/ninjas/{{$ninja['id']}}" :highlights="$ninja['skill'] > 70">
                <h3>{{$ninja['name']}}</h3>
              </x-card>
              
            </li>
        @endforeach
    </ul>
  </div>
   
</x-layout>