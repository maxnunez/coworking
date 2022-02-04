<?php

namespace App\Http\Controllers;

use App\Blog;
use App\News;
use App\User;
use App\Product;
use App\QuestionAndAnswer;
use Illuminate\Http\Request;


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
    {   $news = News::inRandomOrder()->limit(5)->get();
        $servicios  = Product::paginate(20)->where('type', "=", "Servicio");
        return view('coworking.front.servicios', compact('servicios', 'news'));

    }
    public function products()
    {
        $news = News::inRandomOrder()->limit(5)->get();
        $bienes     = Product::paginate(20)->where('type', "=", "Producto");
        return view('coworking.front.productos', compact('bienes', 'news'));
    }

    public function help()
    {
        $questions = QuestionAndAnswer::all();
        return view('coworking.front.help', compact('questions'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('coworking.front.blog', compact('blogs'));
    }
    public function showProduct($id, $type){
    
        $product = Product::find($id);
        $products = Product::where('type', "=", "$type")->inRandomOrder()->limit(3)->get();
        $news = News::inRandomOrder()->limit(5)->get();
      
        return view('coworking.front.paginaInterna', compact('news', 'product', 'products'));
    }
  
    public function showItems($id, $model)
    {
        $class = 'App\\'.$model;
        $item =   $class::find($id);
        $items = $class::inRandomOrder()->limit(3)->get();
        $news = News::inRandomOrder()->limit(5)->get();

        $file = ($model == 'News' ) ? 'news_images' : 'blog_images';

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

    public function updateUser(Request $request, $id)
    {

        /*
        TODO:
          revisar  el update  desde las vistas con la multi coneccion de basede datos
        */
        $user = User::find($id);
        $fields = $request->all();

        User::updateDataWithMedia($id, $fields);


        return redirect('/user-perfil');
    }
}
