@extends("application")
@section("content")
  <h1>応援歌倉庫</h1>
  @foreach($teams as $team)
    <a href = "/teams/{{$team->id}}">{{$team->name}}</a>
  @endforeach
@endsection  
