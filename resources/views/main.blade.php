<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="conteiner">

    {{-- Menu --}}
    <div class="mainpage-menu col-md-3">
      @if (Auth::guest())
        <div class="mainpage-auth">
          <a href="{{ url('/login') }}" class="mainpage-button">Авторизация</a>
        </div>
      @endif

      <div class="mainpage-fiters">
        <form class="mainpage-fiters__form" role="form" action="{{ url('/mainpage') }}" method="GET">
          <input type="submit" value="Применить фильтр" class="mainpage-button">


          <div class="mainpage-select">
            <label for="object">Тип объекта</label>
            <select name="object" id="object">
              @foreach ($objects as $key => $value)
                <option value="{{ $value->id }}">{{ $value->descriptionObject }}</option>
              @endforeach
            </select>
          </div>

          <div class="mainpage-select">
            <label for="house">Вид недвижимости</label>
            <select name="house" id="house">
              @foreach ($houses as $key => $value)
                <option value="{{ $value->id }}">{{ $value->descriptionHouse }}</option>
              @endforeach
            </select>
          </div>

          <div class="mainpage-select">
            <label for="property">Вид объекта</label>
            <select name="property" id="property">
              @foreach ($properties as $key => $value)
                <option value="{{ $value->id }}">{{ $value->descriptionType }}</option>
              @endforeach
            </select>
          </div>

          <div class="mainpage-select">
            <label for="floor">Этаж</label>
            <select name="floor" id="floor">
              @foreach ($floors as $key => $value)
                <option value="{{ $value }}">{{ $key }}</option>
              @endforeach
            </select>
          </div>

          <div class="mainpage-select">
            <label for="numberOfRooms">Количество комнат</label>
            <input type="number" name="numberOfRooms" id="numberOfRooms">
          </div>

          <div class="mainpage-select">
            <label for="price">Цена до</label>
            <input type="number" name="price" id="price">
          </div>

        </form>
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
  <ul>

  </ul>

@endsection
