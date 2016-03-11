<?php

use Illuminate\Database\Seeder;

class AdTablerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<7;$i++){
            DB::table('ads')->insert([
                'position' => $i,
                'url' => 'http://www.baidu.com',
            ]);
        }
    }
}
