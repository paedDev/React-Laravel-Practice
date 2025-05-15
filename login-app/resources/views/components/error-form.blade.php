@props(['name'])

@error($name)
    <p class="text-red-500 text-sm ml-1 mt-1">{{ $message }}</p>
@enderror
