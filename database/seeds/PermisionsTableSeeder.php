<?php

use Illuminate\Database\Seeder;
use App\Permissions;
class PermisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Permissions::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $arr = ['View', 'Add','Edit','Delete','Access', 'Permission'];
        foreach($arr as $value){
            Permissions::create(['title' => $value]);
        }
    }
}
