@extends("application")
@section("content")
  <h1>応援歌倉庫</h1>
  @foreach($teams as $team)
    <div class= "team">
      <a href = "/teams/{{$team->id}}">{{$team->name}}</a>
    </div>
  @endforeach
@endsection  
