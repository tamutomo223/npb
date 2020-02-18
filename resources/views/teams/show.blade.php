@extends("application")
@section("content")
  <h2>{{$team->name}}</h2>
  @foreach($songs as $song)
    <a href="/songs/{{$song->id}}">
    <p>#{{$song->number}} {{$song->player->family_name}} {{$song->player->first_name}}</p>
    </a>
  @endforeach
@endsection