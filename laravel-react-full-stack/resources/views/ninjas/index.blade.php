<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja List</title>
</head>
<body>
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
                <p>
                    {{$ninja['name']}}
                </p>
                <a href="/ninjas/{{$ninja['id']}}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
