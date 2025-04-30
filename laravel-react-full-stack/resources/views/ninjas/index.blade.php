<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja List</title>
</head>
<body>
    <h2>Currently Available Ninjas</h2>
    <p>{{$greeting}}</p>
    <ul>
        <li>Naruto</li>
        <li>Sasuke</li>
        <li>Kakashi</li>
        <li>
            <a href="/ninjas/{{$ninjas[0]["id"]}}">{{$ninjas[0]['name']}}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{$ninjas[1]["id"]}}">
                {{$ninjas[1]['name']}}
                </a>
            </li>
    </ul>
</body>
</html>
