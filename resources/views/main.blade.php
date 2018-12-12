<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')

  <ul>
      @foreach ($realtys->all() as $realty)
        <li>{{ $realty }}</li>
      @endforeach
  </ul>

@endsection
