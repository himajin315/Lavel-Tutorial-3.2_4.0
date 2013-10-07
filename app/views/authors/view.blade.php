@extends('layouts.default')


@section('content')
  <h1>{{ $authors->name }}</h1>

  <p>{{ $authors->bio }}</p>

  <p><small>{{ $authors->updated_at}}</small></p>

  <p>
    {{ link_to_route('authors','Authors') }} |
    {{ link_to_route('editAuthor','Edit', array($authors->id)) }}
  </p>
@stop