<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('teams')->insert([
        ["name"=>'中日ドラゴンズ'],
        ["name"=>'読売ジャイアンツ'],
        ["name"=>'横浜DeNAベイスターズ'],
        ["name"=>"阪神タイガース"],
        ["name"=>"広島東洋カープ"],
        ["name"=>"東京ヤクルトスワローズ"],
        ["name"=>"埼玉西武ライオンズ"],
        ["name"=>"福岡ソフトバンクホークス"],
        ["name"=>"東北楽天ゴールデンイーグルス"],
        ["name"=>"千葉ロッテマリーンズ"],
        ["name"=>"北海道日本ハムファイターズ"],
        ["name"=>"オリックスバファローズ"]]);
      }
  
    
}
