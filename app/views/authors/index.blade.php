@extends('layouts.default')

@section('content')
  <h1>Author Home Page</h1>

  <ul>
  @foreach($authors as $author)
    <li>{{ link_to_route('author', $author->name, array('id'=>$author->id)) }}</li>
  @endforeach
  </ul>

    <p>{{ link_to_route('new_author', 'New Author') }}</p>
@stop