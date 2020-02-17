@extends("application")
@section("content")
  <h2>{{$team->name}}</h2>
  @foreach($songs as $song)
    <div class="song">
    <p>#{{$song->number}} {{$song->player->family_name}} {{$song->player->first_name}}</p>
    <p>{{$song->lyrics}}</p>
    <audio controls src="{{$song->link}}"></audio>
    </div>
  @endforeach
@endsection    