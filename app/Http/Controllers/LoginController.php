<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){



        $noticia = new Noticia();
       
        $noticia->titular=$request->titular;
        $noticia->entrada=$request->entrada;
        $noticia->cuerpo=$request->cuerpo;
        $noticia->imagen=$request->imagen;
        $noticia->fecha= new DateTime();
        $noticia->categoria_id=$request->categoria_id;
        $noticia->usuario_id=1;
        $noticia->save();
        return response($noticia);

    }
}
