@extends('layouts.base')
@section('main')
  <div class="form">
    <p>Insert New Data</p>
    {!! Form::open(['url' => '/insertData', 'method' => 'post', 'class' => 'form']) !!}

      {{ Form::label('type', 'Type') }}
      {{ Form::text('type', '', ['class' => 'input', 'required']) }}
      {{ Form::label('content', 'Content') }}
      {{ Form::text('content', '', ['class' => 'input', 'required']) }}
      {{ Form::submit('Insert', ['class' => 'click']) }}

    {!! Form::close() !!}
  </div>
@endsection
