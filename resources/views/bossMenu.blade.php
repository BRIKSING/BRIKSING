@extends('layouts.app')

@section('content')
  <div class="menu">
    <a href="{{ url('/bossEmploees') }}" class="button">Управление сотрудниками</a>
    <a href="{{ url('/bossDeals') }}" class="button">Информация о сделках</a>
    <a href="{{ url('/bossRate') }}" class="button">Рейтинг сотрудников</a>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="button">Выход из учетной записи</a>
  </div>
@endsection
