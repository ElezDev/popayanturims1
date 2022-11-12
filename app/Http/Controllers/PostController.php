<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Image;

use Illuminate\Http\Request;

/**
 * Class PostController
 * @package App\Http\Controllers
 */

class PostController extends Controller
{
    /**
     * Display a listing of the resource.

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Http::get('http://popayanturimsapi.test/v1/post');
        $PostArray = $post->json();
        return view('post.index',compact('PostArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('post.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $post = Http::post('http://popayanturimsapi.test/v1/post',$request->all());
        return $post;

       

         return $request;
        
        }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Http::get('http://popayanturimsapi.test/v1/post/'.$id);
        $PostArray = $post->json();
    
        return view('post.show', compact('PostArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

//  $file=$request->file("imagen_url");
// $nombreArchivo = "img_".time().".".$file->guessExtension();
// $request->file('imagen_url')->storeAs('public/imagenes', $nombre );
// $post['imagen_url']= "$nombre";
// $post->save();


        return redirect()->route('posts.index',compact('image'))
            ->with('success', 'Post updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/post/' . $id);

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}