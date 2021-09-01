<?php

use Illuminate\Database\Seeder;
use App\Rolls;
use App\Permissions;
use App\Rollpermissions;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Rolls::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        // (1, 'Super Admin', '2019-10-30 10:01:26', NULL, 1),
        // (3, 'Admin', '2019-11-01 07:04:47', NULL, 1),
        // (6, 'Manager', '2019-11-01 07:04:27', '2019-10-31 07:52:57', 0),
        // (7, 'Programmer', '2019-10-31 08:09:37', '2019-10-31 08:09:37', 0);

        $roles = Rolls::create(['title' => 'Super Admin','admin'=> 1]);
        
        $moduleList = ["global","roll","permission","user","settings"];
        
        $permissions = Permissions::get()->pluck('id');

        foreach($moduleList as $module){
            foreach($permissions as $permission){
                Rollpermissions::create([
                    "roll_id" => $roles->id,
                    "permission_id" => $permission,
                    "module" => $module,
                    "value" => 1,
                ]);
            }
        }
        
        $roles = ["Admin","Manager","Programmer"];
        foreach($roles as $role){
            Rolls::create(['title' => $role]);
        }
    }
}
