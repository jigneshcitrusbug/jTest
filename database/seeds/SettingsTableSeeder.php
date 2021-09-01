<?php

use Illuminate\Database\Seeder;
use App\Settings;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Settings::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $arr = [
            ['fkey'=>'bg-color','fvalue' => 'primary','module' => 'global'],

            ['fkey'=>'sidebar-background','fvalue' =>  'http://localhost:8000/app-assets/img/sidebar-bg/03.jpg', 'module' =>  'global'],

            ['fkey'=>'sidebar-width','fvalue' =>  'sidebar-lg', 'module' =>  'global'],

            ['fkey'=>'theme-layout', 'fvalue' => 'transparent', 'module' =>  'global'],

            ['fkey'=>'theme-transparent-bg','fvalue' =>  'bg-glass-1', 'module' =>  'global'],

            ['fkey'=>'compact-menu','fvalue' =>  '0','module' =>  'global'],

            ['fkey'=>'active_lang', 'fvalue' => 'en', 'module' =>  'global'],

            ['fkey'=>'admin-menu-json', 'fvalue' =>  '[{"text":"Services","icon":"fa fa-user-plus","href":"/admin/services","target":"_self","title":"Services","rolls":["1","3","6","7"]},{"text":"Seo","icon":"fa fa-buysellads","href":"/admin/seos","target":"_self","title":"SEO","rolls":["1","3","6"]},{"text":"Users","href":"/admin/users","icon":"fa fa-user","target":"_self","title":"","rolls":["1","3","6","7"]},{"text":"Roll Permissions","href":"/admin/rollpermissions/global","icon":"fa fa-arrows","target":"_self","title":"Roll Permissions","rolls":["1","3"]},{"text":"Rolls","href":"/admin/rolls","icon":"fa fa-address-book","target":"_self","title":"Rolls","rolls":["1","3"]},{"text":"Setting","icon":"fa fa-database","href":"/admin/settings/module/global","target":"_self","title":"Settings","rolls":["1","3","6"]}]', 'module' =>  'global'],

            ['fkey'=>'default_title', 'fvalue' =>  'Default Site Title', 'module' =>  'seos'],

            ['fkey'=>'default_description','fvalue' =>  'Description Description Description Description Description Description Description DescriptionDescription Description Description', 'module' => 'seos'],

            ['fkey'=>'default_og_type', 'fvalue' =>  'website', 'module' =>  'seos'],

            ['fkey'=>'default_twitter_card', 'fvalue' =>  'summary', 'module' =>  'seos'],

            ['fkey'=>'fb_admins', 'fvalue' => '888777555555', 'module' =>  'seos'],
            
            ['fkey'=>'ADMIN_LOGO', 'fvalue' =>  '/storage/uploads/images.png', 'module' =>  'global']

        ];
        
        foreach($arr as $value){
            Settings::create($value);
        }
    }
}
