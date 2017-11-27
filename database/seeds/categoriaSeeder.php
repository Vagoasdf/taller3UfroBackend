<?php

use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'descripcion' => 'futbol',
        ]);
        DB::table('categoria')->insert([
            'descripcion' => 'tenis'

        ]);
        DB::table('categoria')->insert([
            'descripcion' => 'voley'

        ]);

        
       
    }
}
