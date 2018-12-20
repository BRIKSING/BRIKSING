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
          <a href="{{ url('/register?page=boss') }}">Ранг по количеству сделок</a>
        </div>

        <div class="action">
          <a href="{{ url('/register?page=boss') }}">Ранг по сумме сделок</a>
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
            <td class="mainpage-td__header">Ранг</td>
            <td class="mainpage-td__header">Ф.И.О</td>
            <td class="mainpage-td__header">Количество сделок</td>
            <td class="mainpage-td__header">Сумма сделок</td>
          </tr>
          {{ $i = 0 }}
          @foreach ($employees as $employee)
            {{ $i++ }}
            <tr class="mainpage-table-tr">
              <td class="mainpage-td">{{ $i }}</td>
              <td class="mainpage-td">{{ $employee->firstName }} {{ $employee->lastName }}  {{ $employee->patronomyc }}</td>
              <td class="mainpage-td">{{ $countDeals[$employee->id] }}</td>
              <td class="mainpage-td">{{ $costDeals[$employee->id] }}</td>
            </tr>
          @endforeach

        </table>
      </div>

    </div>

  </div>


@endsection
