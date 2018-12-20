@extends('layouts.app')

@section('content')

  <div class="container">

    {{-- Image --}}
    <div class="col-md-3 boss-page__title">
      Моя недвижимость
    </div>

    {{-- Functional --}}
    <div class="col-md-9">

      {{-- Actions --}}
      <div class="boss-actions">

        <div class="action">
          <a href="{{ url('/clientAddForm') }}">Добавить</a>
        </div>

        <div class="action">
          <a href="{{ url('/clientMenu') }}">Назад</a>
        </div>

      </div>

      {{-- Table --}}
      <table class="mainpage-table col-md-9">
        <tr class="mainpage-table-tr">
          <td class="mainpage-td__header">Вид недвижимости</td>
          <td class="mainpage-td__header">Тип объекта</td>
          <td class="mainpage-td__header">Вид объекта</td>
          <td class="mainpage-td__header">Кол-во комнат</td>
          <td class="mainpage-td__header">Общая площадь</td>
          <td class="mainpage-td__header">Этаж, этажей</td>
          <td class="mainpage-td__header">Цена</td>
          <td class="mainpage-td__header">Адрес</td>
          <td class="mainpage-td__header">Описание</td>
        </tr>
        @foreach ($realties as $realty)
          <tr class="mainpage-table-tr">
            <td class="mainpage-td">{{ $realty->object->descriptionObject }}</td>
            <td class="mainpage-td">{{ $realty->house->descriptionHouse }}</td>
            <td class="mainpage-td">{{ $realty->property->descriptionType }}</td>
            <td class="mainpage-td">{{ $realty->numberOfRooms }}</td>
            <td class="mainpage-td">{{ $realty->totalArea }}</td>
            <td class="mainpage-td">{{ $realty->floor }}, {{ $realty->floors }}</td>
            <td class="mainpage-td">{{ $realty->price }}</td>
            <td class="mainpage-td">{{ $realty->city }},
                                             {{ $realty->street }},{{ $realty->numberHouse }}
                                             {{ $realty->apartment }}</td>
            <td class="mainpage-td">{{ $realty->descript }}</td>
          </tr>
        @endforeach
      </table>

    </div>

  </div>

@endsection
