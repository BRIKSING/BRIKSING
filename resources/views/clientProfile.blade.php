@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-profile">
                  <div class="panel-heading">Мой профиль</div>

                  <?php // TODO: Необходимо добавить добавление клиента в зависимости от выбранного поля ?>
                  @if (Auth::user())

                    <div class="cont">
                      <table class="dashboard-table">
                        @foreach ($options as $key => $value)
                          <tr class="dashboard-table-tr">
                            <td class="dashboard-table-tr-td__key">{{ $key }}</td>
                            <td class="dashboard-table-tr-td__value">{{ $value }}</td>
                          </tr>
                        @endforeach
                      </table>
                    </div>
                    {{-- <div class="user">{{ Auth::user() }}</div> --}}

                  @endif

              </div>
          </div>
      </div>
  </div>

@endsection
