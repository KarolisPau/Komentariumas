<?php

namespace Database\Seeders;

use App\Models\Plakatas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarasSeeder extends Seeder
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
        
        $posters = Plakatas::all()->pluck('id')->toArray();
        
        
            for ($i = 0; $i < $count ; $i++) {

            DB::table('komentaras')->insert([
                
            'plakatas_id' => $posters[$i],
            'user_id' => $users[$i],
            'comment' => 'Komentatorius su id -> '.$users[$i],
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
    }
}
