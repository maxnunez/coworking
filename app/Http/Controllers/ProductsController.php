<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('coworking.bakent.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('coworking.bakent.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->all();
        $v = Validator::make($request->all(), [
            'title'       => 'required|string',
            'category_id' => 'required',
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
        return redirect('admin/productos-servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product    = Product::find($id);
        $categories = Category::pluck('name', 'id');
        return view('coworking.bakent.products.update', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $fields  = $request->all();

        $v = Validator::make($request->all(), [
            'title'       => 'required|string',
            'category_id' => 'required',
        ]);
        if ($v && $v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        Product::updateDataWithMedia($id, $fields, 'category');

        CategoryProduct::where('product_id', '=', $id)->delete();
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
        Session::flash('flash_message', 'Se ha actualizado la categoria');
        Session::flash('flash_message_type', 'success');

        return redirect('admin/productos-servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            deleteImage($product->url_img, 'product_images');
            CategoryProduct::where('product_id', '=', $id)->delete();
            $product->delete();
            Session::flash('flash_message', '¡Categoria Eliminada!');
            Session::flash('flash_message_type', 'success');
        } else {
            Session::flash('flash_message', 'la categoria no pudo ser eliminado.');
            Session::flash('flash_message_type', 'warning');
        }
        return redirect('admin/productos-servicios');
    }
}
