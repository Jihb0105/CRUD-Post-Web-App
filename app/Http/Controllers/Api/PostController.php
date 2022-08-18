<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;

class PostController extends Controller
{
    public function index()
    {
        $response = Http::get('https://gorest.co.in/public/v2/posts?access-token=65e7fd78356ca0212ee59cd220af01edc436e55bf9f9e5756adca41d0e60d0dd');
        // $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        if($response->successful()){
            $posts = collect(json_decode( $response, true));
        }

        return view('api.posts.index', ['posts' => $posts->paginate(5)]);
    }

    public function create()
    {
        $response = Http::get('https://gorest.co.in/public/v2/users?access-token=65e7fd78356ca0212ee59cd220af01edc436e55bf9f9e5756adca41d0e60d0dd');
        $users = $response->json();

        return view('api.posts.create', compact('users'));
    }

    public function store(Request $request)
    {
        $response = Validator::make($request->all(), [
            'user_id' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        
        if ($response->fails()){
            return response()->json(['errors'=>$response->errors()->all()]);
        }else{
            $response = Http::post('https://gorest.co.in/public/v2/posts?access-token=65e7fd78356ca0212ee59cd220af01edc436e55bf9f9e5756adca41d0e60d0dd', [
                'user_id' => $request->user_id,
                'title' => $request->title,
                'body' => $request->body
            ]);
            return to_route('posts.index');
        }
    
    }

    public function show($id)
    {
        $token = '65e7fd78356ca0212ee59cd220af01edc436e55bf9f9e5756adca41d0e60d0dd';
        if($id){
            $response = Http::withToken($token)
            ->get('https://gorest.co.in/public/v2/posts/'. $id);
            if($response->successful()){
                $post = json_decode($response, true);
            }
        }

        return view('api.posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $token = '65e7fd78356ca0212ee59cd220af01edc436e55bf9f9e5756adca41d0e60d0dd';
        if($id){
            $response = Http::withToken($token)
            ->get('https://gorest.co.in/public/v2/posts/'. $id);
            if($response->successful()){
                $post = json_decode($response, true);
            }
        }

        return view('api.posts.edit', ['post' => $post]);
    }

    public function update(Request $request)
    {
        $token = '65e7fd78356ca0212ee59cd220af01edc436e55bf9f9e5756adca41d0e60d0dd';
        $id = $request->id;

        $response = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        
        if ($response->fails()){
            return response()->json(['errors'=>$response->errors()->all()]);
        }else{
            $response = Http::withToken($token)
            ->put('https://gorest.co.in/public/v2/posts/'. $id, [
                // 'user_id' => $request->user_id,
                'title' => $request->title,
                'body' => $request->body
            ]);
            return to_route('posts.index');
        }
    }

    public function destroy($id)
    {
        $token = '65e7fd78356ca0212ee59cd220af01edc436e55bf9f9e5756adca41d0e60d0dd';
        Http::withToken($token)
            ->delete('https://gorest.co.in/public/v2/posts/'. $id);
        
        return to_route('posts.index');
    }
}
