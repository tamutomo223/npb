@extends("application")
@section("content")
  <div class = "team-wrapper">
  <h2>{{$team->name}}</h2>
  <div class = "player-list">
  @foreach($songs as $song)
    <a class = "inline"href="/songs/{{$song->id}}">
      <div class = "player">
        <div class= "player-num">#{{$song->number}}</div> 
        <p class = "player-name"> {{$song->player->family_name}} {{$song->player->first_name}}</p>
      </div>
    </a>
  @endforeach
</div>
</div>
@endsection