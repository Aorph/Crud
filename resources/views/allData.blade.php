@extends('layouts.base')
@section('main')
  <p>All Data : </p>
  <table>
    <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Content</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
      @foreach ($data as $item)
        <tr>
          <td class="little td">{{ $item{'id'} }}</td>
          <td class="type td">{{ $item{'type'} }}</td>
          <td class="td">{{ $item{'content'} }}</td>
          <td class="little buttonTD">
            {{ Form::open(['url' => '/update', 'method' => 'post', 'class' => 'form2']) }}
              {{ Form::hidden('id', $item['id']) }}
              {{ Form::submit('U', ['class' => 'button']) }}
            {{ Form::close() }}
          </td>
          <td class="little buttonTD">
            {{ Form::open(['url' => '/delete', 'method' => 'post', 'class' => 'form2']) }}
              {{ Form::hidden('id', $item['id']) }}
              {{ Form::submit('X', ['class' => 'button']) }}
            {{ Form::close() }}
          </td>
        </tr>
      @endforeach
  </table>
@endsection
