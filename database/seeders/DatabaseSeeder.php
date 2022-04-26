<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(2)->create();

        User::create([
            'name' => 'alief',
            'username' => 'aliefhafids',
            'email' => 'admin@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'dika',
            'username' => 'riandika',
            'email' => 'pegawai@gmail.com',
            'level' => 'pegawai',
            'password' => bcrypt('pegawai123'),
        ]);

        Category::create([
            'name' => 'Admin',
            'code' => 'AD'
        ]);

        Category::create([
            'name' => 'Montir',
            'code' => 'MN'
        ]);

        Category::create([
            'name' => 'Sopir',
            'code' => 'SP'
        ]);
        
        Category::create([
            'name' => 'Kernet',
            'code' => 'KR'
        ]);

        Vehicle::create([
            'name' => 'Bus Haryanto A011',
            'type' => 'Pariwisata'
        ]);

        Vehicle::create([
            'name' => 'Bus Haryanto P021',
            'type' => 'Pariwisata'
        ]);

        Vehicle::create([
            'name' => 'Bus Haryanto A122',
            'type' => 'Penumpang'
        ]);
    }
}
