@extends('layouts.app')
 
@section('title')Create Page @endsection
 
@section('content')

<a href="{{route('posts.create')}}" class="btn btn-info">create Post</a>

<table class="table">


  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($posts as $post)
    <tr>
        <th scope='row'>{{ $post['id']}}</th>    
        <td>{{ $post['title']}}</td>
        <td>{{ $post['created_by']}}</td>
        <td>{{ $post['posted']}}</td>

        <td>
          <a href="{{route('posts.show',['post'=>$post['id']])}}" class="btn btn-info">view</a>
          <a href="{{route('posts.edit',['post'=>$post['id']])}}" class="btn btn-success">Edit</a>
          <a href="#" class="btn btn-danger">delete</a>
        </td>
      
    </tr>
    @endforeach


  </tbody>
</table>

@endsection




