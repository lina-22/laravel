<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Pays;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();
        User::create(["name"=>"Timothée Moulin",
        "email"=>"timomoulin@msn.com",
        "password"=>bcrypt("timomoulin@msn.com1")]);

        $pays1=Pays::create(["nom"=>"France"]);
        $destination1=Destination::create(["nom"=>"lorem","description"=>"lorem","prix"=>150,"duree"=>7,"id_pays"=>$pays1->id]);
        
    }
}
