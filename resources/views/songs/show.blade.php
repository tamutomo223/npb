@extends("application")
@section("content")
<h1>{{$player->family_name}} {{$player->first_name}}</h1>
<div class = "song">
<p>{{$song->lyrics}}</p>
<audio src="{{$song->link}}" controls>
</div>
@endsection