@extends('layouts.default')

@section('content')
  <h1>Add New Author</h1>


  {{ Form::open(array('url' => 'authors/create', 'method' => 'post')) }}
  <p>
    {{ Form::label('name','Name:') }}<br />
    {{ Form::text('name') }}
  </p>

  <p>
    {{ Form::label('bio','Biography:') }}<br />
    {{ Form::textarea('bio') }}
  </p>

  <p> {{ Form::submit('Add Author') }} </p>

  {{ Form::close() }}
@stop