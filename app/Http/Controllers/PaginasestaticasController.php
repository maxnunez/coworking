<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasestaticasController extends Controller
{

   public function intercambios()
   {
      return view('coworking.front.paginasestaticas.intercambios');
   }

   public function ofertas()
   {
      return view('coworking.front.paginasestaticas.ofertas');
   }

}
