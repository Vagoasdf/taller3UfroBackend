<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Categoria;

class CategoriaController extends Controller
{
       public function index()
    {
        $listadoCat=Categoria::all();
        return response($listadoCat);
    }
}
