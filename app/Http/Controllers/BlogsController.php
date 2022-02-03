<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Blog;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('coworking.bakent.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coworking.bakent.blogs.create');
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
            'title' => 'required|string',
            'content' => 'required|string',
            'abstract' => 'required|string'
        ]);
        if ($v && $v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $blog = Blog::createDataWithMedia($fields, 'news');
        if ($blog) {
            Session::flash('flash_message', 'Se ha creado un nuevo blog');
            Session::flash('flash_message_type', 'success');
        } else {
            Session::flash('flash_message', 'Hubo un error al crear el blog');
            Session::flash('flash_message_type', 'success');
        }
        return redirect('admin/post-blogs');
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
        $blog = Blog::find($id);
        return view('coworking.bakent.blogs.update', compact('blog'));
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

        $blog = Blog::find($id);
        $fields = $request->all();

        $v = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'abstract' => 'required|string'
        ]);
        if ($v && $v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        Blog::updateDataWithMedia($id, $fields, 'blog');

        Session::flash('flash_message', 'Se ha actualizado el blog');
        Session::flash('flash_message_type', 'success');

        return redirect('admin/post-blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog) {
            deleteImage($blog->url_img, 'blog_images');
            $blog->delete();
            Session::flash('flash_message', '¡Blog Eliminada!');
            Session::flash('flash_message_type', 'success');
        } else {
            Session::flash('flash_message', 'el blog no pudo ser eliminado.');
            Session::flash('flash_message_type', 'warning');
        }
        return redirect('admin/post-blogs');
    }
}
