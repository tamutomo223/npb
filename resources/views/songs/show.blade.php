@extends("application")
@section("content")
  <h1 class = "player-name2">{{$player->family_name}} {{$player->first_name}}</h1>
  <div class = "song">
    <p class= "lyrics">{{$song->lyrics}}</p>
    <audio src="{{$song->link}}" controls>
  </div>
@endsection