@extends('layouts.app')

@section('content')
  <div class="menu">
    <a href="{{ url('/clientRealties') }}" class="button">Моя недвижимость</a>
    <a href="{{ url('/clientDeals') }}" class="button">Мои сделки</a>
    <a href="{{ url('/clientProfile') }}" class="button">Мой профиль</a>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button">Выход из учетной записи</a>
  </div>
@endsection
