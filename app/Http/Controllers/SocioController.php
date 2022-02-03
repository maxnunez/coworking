<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SocioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('socio');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

        // if (Auth::user()->restablecer_pass == 'on') {
        //     return view('usuarios.reestablecer');
        // }else {
        //     if (Auth::user()->tipo_suscripcion == 'suscriptor') {
        //         if (Auth::user()->estado_suscripcion == 'nuevo') {
        //             return view('suscripcion.nuevo');
        //         }
        //         if (Auth::user()->estado_suscripcion == 'vencido') {
        //             return view('suscripcion.vencido');
        //         }
        //         if (Auth::user()->estado_suscripcion == 'paga') {
        //             $hoy = date_create();
        //             $f_v = date_create(Auth::user()->fecha_vencimiento_suscripcion);
        //             $interval = date_diff($f_v, $hoy);
        //             $dias = $interval->format('%a');
        //             if ($dias < 0){
        //                 $user = User::find(Auth::user()->id);
        //                 $user->estado_suscripcion = 'vencido';
        //                 $user->update();
        //                 return redirect('home');
        //             }else {
        //                 return view('home');
        //             }
        //         }
        //     }else {
        //         return view('home');
        //     }
        // }

      return view('coworking.front.index');

    }
}
