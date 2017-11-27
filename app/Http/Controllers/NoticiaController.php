<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
Use DateTime;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listadoNoticias=Noticia::all();
        return response($listadoNoticias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request){



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

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show($idNoticia)
    {
        try{
            $Noticia = Noticia::findOrFail($idNoticia);
        }catch(Exception $e){
            report($e);
           return response()->json([
            'exito' => 'false',
            'mensaje' => 'No existe tal noticia'
            ]);
        }
        return response($Noticia);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $idNoticia)
    {
        try{
            $noticia = Noticia::findOrFail($idNoticia);
        }catch(Exception $e){
            report($e);
           return response()->json([
            'exito' => 'false',
            'mensaje' => 'No existe tal noticia'
            ]);
        }
        $noticia->titular=$request->titular;
        $noticia->entrada=$request->entrada;
        $noticia->cuerpo=$request->cuerpo;
        $noticia->imagen=$request->imagen;
        $noticia->save();
        return response($noticia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($idNoticia)
    {
        Noticia::destroy($idNoticia);
        return 1;
    }
}
