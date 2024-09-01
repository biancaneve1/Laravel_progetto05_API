
<x-layout>


    {{-- @dd($animes) --}}
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-white">
            <h2 >{{$animes['title']}}</h2>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6 text-white">
           <img class="shadow-lg p-3 mb-5 bg-body-tertiary rounded" src="{{$animes['images']['webp']['large_image_url']}}" alt="anime">
        </div>
  

        <div class="col-12 col-md-6 text-white">
           <p>{{$animes['synopsis']}}</p>
           <ul>
            @foreach ($animes['genres'] as $genre )
                     <li>{{$genre['name']}}</li>
            @endforeach

           </ul>
        </div>
    </div>
</div>












</x-layout>