@extends('layouts.base')
@section('main')
  <div class="form">
    <p>Update Data : </p>
    {!! Form::open(['url' => '/updateData', 'method' => 'post', 'class' => 'form']) !!}
      {{ Form::hidden('id', $item['id']) }}

      {{ Form::label('type', 'Type') }}
      {{ Form::text('type', $item['type'], ['class' => 'input', 'required']) }}
      {{ Form::label('content', 'Content') }}
      {{ Form::text('content', $item['content'], ['class' => 'input', 'required']) }}
      {{ Form::submit('Update', ['class' => 'click']) }}

    {!! Form::close() !!}
  </div>
@endsection
