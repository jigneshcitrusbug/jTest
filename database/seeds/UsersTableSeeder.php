<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Rolls;
use App\Userrolls;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $user = User::create(
            [
                'name' => "Super Admin",
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('password'),
                "email_verified_at" => date('Y-m-d H:i:s')
            ]
        );

        
        
        $rolls = Rolls::where('title','Super Admin')->first();
        Userrolls::create([
            'user_id' => $user->id,
            'roll_id' => $rolls->id
        ]);
        

        
    }
}
