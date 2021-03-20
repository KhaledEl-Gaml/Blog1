<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allPosts=[
            ['id'=>'1','title'=>'laravel','created_by'=>'khaled','posted'=>'30-1-2002'],
            ['id'=>'2','title'=>'JS','created_by'=>'mohamed','posted'=>'30-1-2002'],
            ['id'=>'3','title'=>'PHP','created_by'=>'ali','posted'=>'30-1-2002']
     
        ];
     
         return view('posts.index',[
             'posts'=>$allPosts
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('posts.create');       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
        $data = ['id' => 1 , 'title' => 'learn PHP' ,'description' => 'this is my lovely language' ,'posted_by' => 'khaled' , 'created_at' => '2020-01-15',
                    'post_creator' => [
                    'name' => 'khaled',
                    'email' => 'khaled@yahoo.com',
                    'created_at' => '2021-01-01',
                    ]
                ];
        
        return view('posts.show', ['post' => $data]);
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        $post=[
            'id'=>'1','title'=>'laravel','created_by'=>'khaled','posted'=>'30-1-2002'];

        return view('posts.edit',[
            'post'=>$post
            ]);       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
