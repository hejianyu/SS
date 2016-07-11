<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i=0;$i<=100;$i++){
            $temp = [];
            $temp['username'] = str_random(3);
            $temp['password'] = Hash::make('ss');
            $temp['email'] = str_random(3).'@qq.com';
            $n='';
            for($j=1;$j<11;$j++){
                $n.=rand(1,9);
            }
            $temp['phone'] = $n;
            $temp['token'] = str_random(50);
            $temp['status'] = 0;
            $data[] = $temp;
        }
        DB::table('users')->insert($data);

    }
}
