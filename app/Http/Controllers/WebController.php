<?php

namespace App\Http\Controllers;

use App\Blog;
use App\News;
use App\User;
use App\Change;
use App\Product;
use App\Category;
use App\PatnerUser;
use App\CategoryProduct;
use App\QuestionAndAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class WebController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('coworking.front.inicio');
  }
  public function services()
  {
    $news = News::inRandomOrder()->limit(5)->get();
    $servicios  = Product::paginate(20)->where('type', "=", "Servicio")->where('status', '=', '1');
    return view('coworking.front.servicios', compact('servicios', 'news'));
  }
  public function products()
  {
    $news = News::inRandomOrder()->limit(5)->get();
    $bienes     = Product::paginate(20)->where('type', "=", "Producto")->where('status', '=', '1');
    return view('coworking.front.productos', compact('bienes', 'news'));
  }

  public function help()
  {
    $questions = QuestionAndAnswer::all();
    return view('coworking.front.ayuda', compact('questions'));
  }
  public function blog()
  {
    $blogs = Blog::all();
    return view('coworking.front.blog', compact('blogs'));
  }
  public function showProduct($id, $type)
  {

    $product = Product::find($id);
    $products = Product::where('type', "=", "$type")->where('status', '=', '1')->inRandomOrder()->limit(3)->get();
    $news = News::inRandomOrder()->limit(5)->get();

    return view('coworking.front.paginaInterna', compact('news', 'product', 'products'));
  }

  public function showItems($id, $model)
  {
    $class = 'App\\' . $model;
    $item =   $class::find($id);
    $items = $class::inRandomOrder()->limit(3)->get();
    $news = News::inRandomOrder()->limit(5)->get();

    $file = ($model == 'News') ? 'news_images' : 'blog_images';

    return view('coworking.front.interna', compact('item', 'items', 'news', 'file'));
  }
  /**
   *
   * TODO:
   * cambios con los productos y servicios
   *
   */
  public function change()
  {
    return view('coworking.front.change');
  }
  public function changeview()
  {
    return view('coworking.front.change_page');
  }
  // Funciones  de  Perfil  de  Usuario

  public function News()
  {
    $news = News::all();
    return view('coworking.front.noticias', compact('news'));
  }

  /** TODO: FUNCIONALIDAD DEUSURIO LOGUEADO CON ID
   *
   * fACTORIZAR CODE SCOPE QUEEY TAREA SECUNDARY
   */
  public function addFrontProduct()
  {
    $categories = Category::pluck('name', 'id');
    return view('coworking.front.addProduct', compact('categories'));
  }

  public function addProduct(Request $request)
  {
    $fields = $request->all();
    $v = Validator::make($request->all(), [
      'title'       => 'required|string',
      'category_id' => 'required',
      'url_img' => 'required',
    ]);
    if ($v && $v->fails()) {
      return redirect()->back()->withInput()->withErrors($v->errors());
    }
    $product = Product::createDataWithMedia($fields, 'product');

    if (is_array($fields['category_id'])) {
      foreach ($fields['category_id'] as $value) {
        $cat              = new CategoryProduct;
        $cat->product_id  = $product->id;
        $cat->category_id = $value;
        $cat->save();
      }
    } else {
      $cat              = new CategoryProduct;
      $cat->product_id  = $product->id;
      $cat->category_id = $fields['category_id'];
      $cat->save();
    }

    if ($product) {
      Session::flash('flash_message', 'Se ha creado un nuevo producto');
      Session::flash('flash_message_type', 'success');
    } else {
      Session::flash('flash_message', 'Hubo un error al crear el producto ');
      Session::flash('flash_message_type', 'success');
    }
    return redirect('/');
  }

  public function getperfil($id)
  {
    $myProducts = Product::where('type', '=', 'Producto')->where('user_id', '=', $id)->get();
    $myServices = Product::where('type', '=', 'Servicio')->where('user_id', '=', $id)->get();


    $changes = Change::where('status', 'change')
      ->where(function ($query) use ($id) {
        $query->where('user_id',  $id)
          ->orWhere('user_change_id', $id);
      })->get();

    // $change = Change::where('status', 'change')->get();

    $pendings = Change::where('status', 'pending')
      ->where(function ($query) use ($id) {
        $query->where('user_id',  $id)
          ->orWhere('user_change_id', $id);
      })->get();


    return view('coworking.front.perfil', compact('myProducts', 'myServices', 'changes', 'pendings'));
  }

  public function changeproduct($id, Request $request)
  {
    $product = Product::find($id);
    $fields = $request->all();
    $fields['status'] = 'pending';
    $fields['user_change_id'] = $product->user_id;
    $fields['product_change_id'] = $product->id;

    $change = Change::create($fields);

    return redirect('/Perfil-User/' . Auth::user()->id);
  }

  public function changeactive($id, Request $request)
  {
    $change = Change::find($id);
    $fields = $request->all();
    $fields['status'] = 'change';
    $productchange = Product::find($change->product_change_id);
    $productchange->status = 0;
    $productchange->save();
    $product = Product::find($change->product_id);
    $product->status = 0;
    $product->save();
    $change->update($fields);

    return redirect('/Perfil-User/' . Auth::user()->id);
  }

  public function Comunidad()
  {
    $users = PatnerUser::get();
    return view('coworking.front.comunidad', compact('users'));
  }

  public function addFromComunidad()
  {
    return view('coworking.front.addComunidad');
  }

  public function Unircecomunidad(Request $request)
  {
    $fields = $request->all();
    // dd($fields);

    $comunidad = PatnerUser::createDataWithMedia($fields);

    if ($comunidad) {
      Session::flash('flash_message', 'Se ha unido a la comunidad');
      Session::flash('flash_message_type', 'success');
    } else {
      Session::flash('flash_message', 'Hubo un error al unirce a la unidad ');
      Session::flash('flash_message_type', 'success');
    }
    return redirect('/Comunidad');
  }
}
