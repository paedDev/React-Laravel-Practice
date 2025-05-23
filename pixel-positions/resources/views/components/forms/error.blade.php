 @props(['name'])

 @error($name)
     <p class="text-red-600 ml-2 mt-1">{{ $message }}</p>
 @enderror
