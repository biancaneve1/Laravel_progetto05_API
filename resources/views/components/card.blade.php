




<div class="container">
  <div class="row d-flex m-3 ">
    <div class="card p-0 mx-1">
      <img src="{{$img}}" class="card-img-top justify-content-center img-card " alt="immagine di {{$title}}">
      <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{Str::limit($synopsis, 50)}}</p>
        {{-- text-truncate, classe bootstrap per ridurre la visibilità del testo --}}
        <a href="{{route('animes.detail',['id'=> $id])}}" class="btn border border-3 text-white">Details</a>
      </div>
    </div>
  </div>
</div>

