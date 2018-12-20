@extends('layouts.app')

@section('content')

  <div class="container">

    {{-- Image --}}
    <div class="col-md-3 boss-page__title">
      Мои сделки
    </div>

    {{-- Functional --}}
    <div class="col-md-9">

      {{-- Actions --}}
      <div class="boss-actions">

        <div class="action">
          <a href="{{ url('/clientMenu') }}">Назад</a>
        </div>

      </div>

      {{-- Table --}}
      <div class="boss-table">
        <table class="mainpage-table">

          <tr class="mainpage-table-tr">
            <td class="mainpage-td__header">Вид недвижимости</td>
            <td class="mainpage-td__header">Вид сделки</td>
            <td class="mainpage-td__header">Стоимость</td>
            <td class="mainpage-td__header">Дата сделки</td>
            <td class="mainpage-td__header">Риелтор</td>
          </tr>

          @foreach ($deals as $deal)
            <tr class="mainpage-table-tr">
              <td class="mainpage-td">{{ $deal->realty->object->descriptionObject }}</td>
              <td class="mainpage-td">{{ $deal->service->description }}</td>
              <td class="mainpage-td">{{ $deal->realty->price }}</td>
              <td class="mainpage-td">{{ $deal->dateOfDeal }}</td>
              <td class="mainpage-td">{{ $deal->realtor->firstName }} {{ $deal->realtor->lastName }}</td>
            </tr>
          @endforeach

        </table>
      </div>

    </div>

  </div>

@endsection
