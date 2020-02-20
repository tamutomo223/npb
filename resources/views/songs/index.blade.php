@extends("application")
@section("content")
  <header>
    <div class="header-title">
      <i class="fas fa-baseball-ball"></i>応援歌倉庫</div>
  </header>
  <div class = "banar">
    <div class = "banar-title">
      <h1>応援歌倉庫</h1>
      <h3>〜応援は選手を救う〜</h3>
    </div>
  </div>
  <div class= "team-title">チーム別</div>
  <div class = "team">
      <div class = "team-left">
          <h3 class= "team-l">セ・リーグ</h3>
        <a href = "teams/1">
          <div class = "team-flex dragons">
          <div class = "team-name dragons-name">中日ドラゴンズ</div>
          </div>
        </a>
        <a href = "teams/2">
          <div class = "team-flex giants">
          <div class = "team-name giants-name">読売ジャイアンツ</div>
          </div>
        </a>
        <a href = "teams/3">
          <div class = "team-flex bay">
          <div class = "team-name bay-name">横浜DeNAベイスターズ</div>
          </div>
        </a>
        <a href = "teams/4">
          <div class = "team-flex tigers">
          <div class = "team-name tigers-name">阪神タイガース</div>
          </div>
        </a>
        <a href = "teams/5">
          <div class = "team-flex carp">
          <div class = "team-name carp-name">広島東洋カープ</div>
          </div>
        </a>
        <a href = "teams/6">
          <div class = "team-flex swa">
          <div class = "team-name swa-name">東京ヤクルトスワローズ</div>
          </div>
        </a>
  </div>
  <div class = "team-right">
      <h3 class= "team-l">パ・リーグ</h3>
      <a href = "teams/7">
        <div class = "team-flex lions">
        <div class = "team-name lions-name">埼玉西武ライオンズ</div>
        </div>
      </a>
      <a href = "teams/8">
        <div class = "team-flex hawks">
        <div class = "team-name hawks-name">福岡ソフトバンクホークス</div>
        </div>
      </a>
      <a href = "teams/9">
        <div class = "team-flex eagle">
        <div class = "team-name eagle-name">東北楽天ゴールデンイーグルス</div>
        </div>
      </a>
      <a href = "teams/10">
        <div class = "team-flex marin">
        <div class = "team-name marin-name">千葉ロッテマリーンズ</div>
        </div>
      </a>
      <a href = "teams/11">
        <div class = "team-flex fighters">
        <div class = "team-name fighters-name">北海道日本ハムファイターズ</div>
        </div>
      </a>
      <a href = "teams/12">
        <div class = "team-flex buff">
        <div class = "team-name buff-name">オリックスバファローズ</div>
        </div>
      </a>
  </div>
  </div> 
  <footer>
      Copyright© 応援歌倉庫 , 2020 All Rights Reserved Powered by AFFINGER5.
  </footer>
  @yield('teams')
@endsection  
