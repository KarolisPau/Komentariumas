<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlakatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all()->pluck('id')->toArray();
        $count = count($users);
        

            for ($i = 0; $i < $count ; $i++) {

            DB::table('plakatas')->insert([
            'title' => 'title`as',
            'user_id' => $users[$i],
            'header' => 'headeris',
            'footer' => "footer`is",
            'img' => "/images/tankas.jpg",
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
    }
    
}
