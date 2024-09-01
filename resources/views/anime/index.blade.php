

<x-layout>
    {{-- @dd($animes) --}}

<div class="container my-5">
    <div class="row">
        <div class="col-12">
      <h2 class="text-white text-center">ANIMES</h2>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
      @foreach ($animes as $anime )
          <div class="col-12 col-md-4 my-2 d-flex justify-content-center">
            <x-card
            {{-- versione con stringa --}}
            
            img="{{$anime['images']['webp']['image_url']}}"
            
            title="{{$anime['title']}}"

             synopsis="{{$anime['synopsis']}}"

             text="Vai al dettaglio"
             
             id="{{$anime['mal_id']}}"

             {{-- versione con variabile , banding esplicito --}}
             
             {{-- :img="$animes['images']['webp']['image_url']"
            
            :title="$animes['title']"

             :synopsis="$animes['synopsis']" --}}
            />
          </div>
      @endforeach
    </div>
</div>










</x-layout>