<x-layout>
    <x-slot:heading>
        All Posts
    </x-slot:heading>

    <div>
        <ul>
            @foreach($posts as $post)
            <li>
                <a href="/posts/{{$post['id']}}">
                <x-postcard class="text-2xl text-green-700 hover:underline cursor-pointer transition duration-500">
                        <h1>{{$post['title']}}</h1>
                </x-postcard>
            </a>
            </li>
            @endforeach
        </ul>
        <div>    
            {{$posts->links()}}
        </div>
    </div>
</x-layout>