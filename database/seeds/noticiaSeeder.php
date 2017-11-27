<?php

use Illuminate\Database\Seeder;

class noticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('noticia')->insert([
    		'titular' => 'noticia_1',
            'entrada' => 'Algo random',
            'cuerpo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel ligula vehicula, scelerisque velit eget, mattis tortor. Mauris in est vitae erat tempor sodales non nec dui. Donec vehicula elit mauris, id efficitur odio condimentum eu. Praesent tempus diam eu convallis auctor. Aenean efficitur leo at dictum aliquet. Vivamus at lacus ac sem semper commodo. Nulla facilisi. Proin egestas sagittis cursus. Sed hendrerit congue massa id euismod. Praesent feugiat odio sem, eget rhoncus nibh laoreet nec. Nulla at elementum orci. Pellentesque ligula nulla, convallis non egestas eget, ultrices a velit.',
            'imagen' => 'http://via.placeholder.com/350x150',
            'fecha' => '2017-11-01 00:00:00',
            'categoria_id' => '1',
            'usuario_id' => '1'
        ]);

        DB::table('noticia')->insert([
    		'titular' => 'noticia_2',
            'entrada' => 'Otro random',
            'cuerpo' => 'In id pharetra turpis. Integer erat metus, elementum quis ante eget, congue blandit ante. Phasellus faucibus lectus in metus porta, ac volutpat risus ullamcorper. Nunc lacinia eget tellus vel blandit. Phasellus porttitor vitae nunc placerat dapibus. Aenean sit amet faucibus libero. Suspendisse semper varius condimentum. Mauris non est interdum, ultricies nibh non, auctor ante. Suspendisse id massa quis ex lobortis placerat.',
            'imagen' => 'http://via.placeholder.com/350x150',
            'fecha' => '2017-11-01 00:00:00',
            'categoria_id' => '2',
            'usuario_id' => '3'
        ]);

        DB::table('noticia')->insert([
    		'titular' => 'noticia_1',
            'entrada' => 'Algo random',
            'cuerpo' => 'Phasellus pulvinar ut quam eu ultricies. In dui ipsum, rhoncus sit amet sagittis eu, consectetur eu nisl. Quisque malesuada augue massa, nec dictum dui hendrerit et. Fusce turpis purus, tempus ut sapien a, posuere vestibulum neque. Morbi varius tincidunt lobortis. Proin placerat, sem non molestie molestie, erat turpis commodo lorem, ut suscipit ex lorem eu leo. In varius justo mi, eleifend malesuada orci accumsan nec. Nulla eu libero neque. Cras ornare tincidunt lacus a fermentum. Etiam orci nibh, lacinia sit amet sapien ac, dictum pellentesque augue. Morbi commodo interdum sollicitudin. Mauris ut ultrices tellus. Duis dictum venenatis est, quis viverra justo maximus in.',
            'imagen' => 'http://via.placeholder.com/350x150',
            'fecha' => '2017-11-01 00:00:00',
            'categoria_id' => '3',
            'usuario_id' => '2'
        ]);
    }
}
