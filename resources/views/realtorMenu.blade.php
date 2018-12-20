@extends('layouts.app')

@section('content')
  <div class="menu">
    <a href="{{ url('/realtorClients') }}" class="button">Мои клиенты</a>
    <a href="{{ url('/realtorDeals') }}" class="button">Мои сделки</a>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="button">Выход из учетной записи</a>
  </div>
@endsection
