@extends('layouts.app')

@section('content')
  <div class="container">

    {{-- Image --}}
    <div class="col-md-3 boss-page__title">
      Сотрудники
    </div>

    {{-- Functional --}}
    <div class="col-md-9">

      {{-- Actions --}}
      <div class="boss-actions">

        {{-- <div class="search-string">
          <form class="" action="{{ url() }}" method="GET">
            <input type="text" placeholder="Введите параметр поиска" name="searchString">
          </form>
        </div> --}}

        <div class="action">
          <a href="{{ url('/register?page=boss') }}">Добавить</a>
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

          @foreach ($employees as $employee)
            <tr class="mainpage-table-tr">
              <td class="mainpage-td">{{ $employee->firstName }} {{ $employee->lastName }}  {{ $employee->patronomyc }}</td>
              <td class="mainpage-td">{{ $employee->user->email }}</td>
              <td class="mainpage-td">{{ $employee->telephone }}</td>
            </tr>
          @endforeach

        </table>
      </div>

    </div>

  </div>


@endsection
