@extends('layouts.app')

@section('content')

  <div class="container">

    {{-- Image --}}
    <div class="col-md-3 boss-page__title">
      Клиенты
    </div>

    {{-- Functional --}}
    <div class="col-md-9">

      {{-- Actions --}}
      <div class="boss-actions">

        <div class="action">
          <a href="{{ url('/register?page=realtor') }}">Добавить</a>
        </div>

        <div class="action">
          <a href="{{ url('/print') }}">Печать</a>
        </div>

        <div class="action">
          <a href="{{ url('/bossMenu') }}">Назад</a>
        </div>

      </div>

      {{-- Table --}}
      <div class="boss-table">
        <table class="mainpage-table">

          <tr class="mainpage-table-tr">
            <td class="mainpage-td__header">Ф.И.О</td>
            <td class="mainpage-td__header">Email</td>
            <td class="mainpage-td__header">Телефон</td>
          </tr>

          @foreach ($clients as $client)
            <tr class="mainpage-table-tr">
              <td class="mainpage-td">{{ $client->firstName }} {{ $client->lastName }}  {{ $client->patronomyc }}</td>
              <td class="mainpage-td">{{ $client->user->email }}</td>
              <td class="mainpage-td">{{ $client->telephone }}</td>
            </tr>
          @endforeach

        </table>
      </div>

    </div>

  </div>


@endsection
