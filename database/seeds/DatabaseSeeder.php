<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sem factory
        $this->call(EstadosTableSeeder::class);
        //Com factory
        //factory(App\Model\Site\Estados::class, 26)->create();
        
    }
}
