<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('songs')->insert(["lyrics"=>"闘志を燃やせ 気迫で守り抜け 勝利の歓声 受けて羽ばたけ","link"=>"https://www.dropbox.com/s/44r2pe24gmdo5oz/%E5%8A%A0%E8%97%A4%E5%8C%A0%E9%A6%AC.mp3?dl=1","number"=>"52","player_id"=>11,"team_id"=>1]);
    }
}
