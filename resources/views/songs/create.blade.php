@extends("application")
@section("content")
<h2>応援歌登録</h2>
<form action="/" method="post">
{{ csrf_field() }}
  <input class = "number" type = "text" name ="number" placeholder="背番号"/>
  <input class = "lyrics" type = "text" name= "lyrics" placeholder="歌詞"/>
  <input class = "link" type = "text" name= "link" placeholder = "リンク"/>
  <input type = "number" name="player_id" placeholder = "選手ID">
  <input type = "number" name="team_id" placeholder = "チームID">
  <input type ="submit" value="登録">
</form>
@endsection

