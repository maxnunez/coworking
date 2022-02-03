<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class FiltrarcategoriasController extends Controller
{

    public function index()
    {
        $bienes         = Product::orderBy('title', 'DESC')->paginate(20)->where('type', "=", "Producto");
        $servicios      = Product::paginate(20)->where('type', "=", "Servicio");
        $categories     = CategoryProduct::all();
        /*return view('coworking.front.filtrarcategorias',compact('bienes','servicios')); */
        return view('coworking.front.filtrarcategorias', compact('bienes', 'servicios', 'categories'));
    }

    public function filtrarbienes(Request $request)
    {
        $htmlhead = "";
        $htmlbody = "";
        $htmlfinal = "";

        if ($request->ajax()) {
            $html = "";
            $query = $request->get('query');
            if ($query != "") {
                $data = DB::table('products')->where('type', "=", "Producto")->Where('title', 'like', '%' . $query . '%')->orderBy('title', 'DESC')->paginate(20);
            } else {
                $data = Product::orderBy('title', 'DESC')->paginate(20)->where('type', "=", "Producto");
            }
            $total_row = $data->count();

            if ($total_row > 0) {
                $servidor = $request->root();
                $htmlhead = "";
                $htmlbody = "";
                $vactive  = "";
                $cuantos = 0;
                foreach ($data->chunk(4) as $coleccion) {
                    $cuantos++;
                    $vactive = "";
                    if ($cuantos == 1)
                        $vactive = 'active';
                    $htmlbody .=
                        '<div class="item carousel-item ' . $vactive . '" " style="margin-top:10px;">
                       <div class="row" >';
                    foreach ($coleccion as $bien) {
                        $htmlbody .=
                            '<div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart"></i></span>
                                    <div class="img-box">
                                         <img src="' . $servidor . '/' . 'img' . '/' . 'product_images/' . $bien->url_img . '" class="img-fluid" alt="" >
                                    </div>
                                    <div class="thumb-content">
                                         <p style="font-size: 10px;">' . $bien->title . '</p>
                                    </div>
                                    <div class="ibox-tools" style="margin-left: auto;">
                                        <a href="' . $servidor . "/" . "filtrar" . '/' . 'productos' . '/' . $bien->id . '">
                                            <button class="btn btn-primary btn-xs" type="button" style="width:100%;">
                                                <i class="fa fa-search"></i>
                                                Ver Información
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>';
                    }
                    $htmlbody .=
                        '  </div>
                    </div>';
                }

                $htmlfinal =  $htmlbody;
            } else {
                $htmlfinal = ' ';
            }
            $dato = $htmlfinal;
            return json_encode($dato);
        }
    }

    public function filtrarservicios(Request $request)
    {
        $htmlhead = "";
        $htmlbody = "";
        $htmlfinal = "";

        if ($request->ajax()) {
            $html = "";
            $query = $request->get('query');
            if ($query != "") {
                $data = DB::table('products')->where('type', "=", "Servicio")->Where('title', 'like', '%' . $query . '%')->orderBy('title', 'DESC')->paginate(20);
            } else {
                $data = Product::orderBy('title', 'DESC')->paginate(20)->where('type', "=", "Servicio");
            }
            $total_row = $data->count();

            if ($total_row > 0) {
                $servidor = $request->root();
                $htmlhead = "";
                $htmlbody = "";
                $vactive  = "";
                $cuantos = 0;
                foreach ($data->chunk(4) as $coleccion) {
                    $cuantos++;
                    $vactive = "";
                    if ($cuantos == 1)
                        $vactive = 'active';
                    $htmlbody .=
                        '<div class="item carousel-item ' . $vactive . '" " style="margin-top:1px;">
                     <div class="row" >';
                    foreach ($coleccion as $bien) {
                        $htmlbody .=
                            '<div class="col-sm-3">
                              <div class="thumb-wrapper">
                                  <span class="wish-icon"><i class="fa fa-heart"></i></span>
                                  <div class="img-box">
                                       <img src="' . $servidor . '/' . 'img' . '/' . 'product_images/' . $bien->url_img . '" class="img-fluid" alt="" >
                                  </div>
                                  <div class="thumb-content">
                                       <p style="font-size: 10px;">' . $bien->title . '</p>
                                  </div>
                                  <div class="ibox-tools" style="margin-left: auto;">
                                       <a href="' . $servidor . "/" . "filtrar" . '/' . 'productos' . '/' . $bien->id . '">
                                          <button class="btn btn-primary btn-xs" type="button" style="width:100%;">
                                              <i class="fa fa-search"></i>
                                            Ver Información
                                          </button>
                                       </a>
                                    </div>
                              </div>
                          </div>';
                    }
                    $htmlbody .=
                        '  </div>
                  </div>';
                }

                $htmlfinal =  $htmlbody;
            } else {
                $htmlfinal = ' ';
            }
            $dato = $htmlfinal;
            return json_encode($dato);
        }
    }

    public function filtrarproductos($id)
    {
        $productfilter = Product::find($id);
        return view('coworking.front.mostrarproductos', compact('productfilter'));
    }
}
