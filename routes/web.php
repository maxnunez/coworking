<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('login', function () {
    return view('home');
});


//Routes in  web frontend client
Route::get('/', 'WebController@index')->name('index');
Route::get('/Servicios', 'WebController@services')->name('servicios');
Route::get('/Productos', 'WebController@products')->name('productos');
Route::get('/Ayuda', 'WebController@help')->name('ayuda');
Route::get('/Blog', 'WebController@blog')->name('blog');
Route::get('/Noticias', 'WebController@News')->name('noticias');
Route::get('/Items-Mas/{id}/{model}', 'WebController@showItems');
Route::get('/Producto-Mas/{id}/{type}', 'WebController@showProduct');
Route::get('Perfil-Usuario', 'WebController@perfil');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/Add-Front-Product', 'WebController@addFrontProduct')->name('addFrontProducto');
    Route::post('/addProduct', 'WebController@addProduct');
    Route::get('/Perfil-User/{id}', 'WebController@getperfil');
    Route::post('/changeProduct/{id}', 'WebController@changeproduct');
    Route::post('/changeActive/{id}', 'WebController@changeactive');
});
/**

    TODO:  Rutas temporales  por diseño
 */


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('preguntas-respuetas', 'QuestionsAndanswersController');
    Route::resource('usuarios', 'UsersController');
    Route::resource('productos-servicios', 'ProductsController');
    Route::resource('categorias', 'CategoriesController');
    Route::resource('post-blogs', 'BlogsController');
    Route::resource('noticias', 'NewController');
});



/* Llamadas de páginas con Slider de Categorias  Autor : LAB*/
/* Route::get('/filtrarcategorias', 'FiltrarCategoriasController@index')->name('filtrarcategorias');
Route::get('/filtrar/bienes', 'FiltrarCategoriasController@filtrarbienes')->name('filtrarbienes.ajax');
Route::get('/filtrar/servicios', 'FiltrarCategoriasController@filtrarservicios')->name('filtrarservicios.ajax');
Route::get('/filtrar/productos/{id}', 'FiltrarCategoriasController@filtrarproductos')->name('filtrarproductos');


/* Llamadas de páginas estáticas : Autor:LAB
Route::get('/paginastatic-intercambios', 'PaginasestaticasController@intercambios')->name('paginastatic01');
Route::get('/paginastatic-ofertas', 'PaginasestaticasController@ofertas')->name('paginastatic02');
*/
Route::get('/auth/external/user', 'UsersController@auth_external_user');
