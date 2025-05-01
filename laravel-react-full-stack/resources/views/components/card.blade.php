@props(['highlights' => false])
    <div @class(['highlights' => $highlights,'card']) >
        {{$slot}}
        <a {{$attributes}} class="">View Details</a>
    </div>
