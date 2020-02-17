<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('players')->insert([
        ["family_name"=>"京田","first_name"=>"陽太"],
        ["family_name"=>"高橋","first_name"=>"周平"],
        ["family_name"=>"藤井","first_name"=>"淳志"],
        ["family_name"=>"阿部","first_name"=>"寿樹"],
        ["family_name"=>"平田","first_name"=>"良介"],
        ["family_name"=>"根尾","first_name"=>"昂"],
        ["family_name"=>"大島","first_name"=>"洋平"],
        ["family_name"=>"遠藤","first_name"=>"一星"],
        ["family_name"=>"大野","first_name"=>"奨太"],
        ["family_name"=>"ソイロ","first_name"=>"アルモンテ"],
        ["family_name"=>"加藤","first_name"=>"匠馬"],
        ["family_name"=>"福田","first_name"=>"永将"],
        ["family_name"=>"堂上","first_name"=>"直倫"],
        ["family_name"=>"ダヤン","first_name"=>"ビシエド"],
        ["family_name"=>"桂","first_name"=>"依央利"]]
      );
    }
}
