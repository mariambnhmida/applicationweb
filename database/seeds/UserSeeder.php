<?php

use Illuminate\Database\Seeder;
use App\Modules\User\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        'email'=>'test@gmail.com',
            'password'=>bcrypt('123456'),
            'nom'=>'test',
            'prenom'=>'test1',
            'adresse'=>'tunis',
            'pays'=>'tunisie +216',
            'tel'=>'52052328',
            'status'=> 1,
            'role' => 0,
            'site_id'=> null,
            ]);
    }
}
