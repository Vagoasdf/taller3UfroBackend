<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ej=1;
        DB::table('usuario')->insert([
            'name' => 'user'.$ej,
            'email' => 'coreo'.$ej.'@gmail.com',
            'password' => bcrypt('password'),
        ]);
        
        $ej++;
         DB::table('usuario')->insert([
            'name' => 'user'.$ej,
            'email' => 'coreo'.$ej.'@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $ej++;
         DB::table('usuario')->insert([
            'name' => 'user'.$ej,
            'email' => 'coreo'.$ej.'@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $ej++;
    }
}
