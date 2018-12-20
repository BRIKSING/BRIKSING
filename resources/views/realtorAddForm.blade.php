@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Register</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/realtorAdd') }}">
                          {{ csrf_field() }}

                          <div class="mainpage-select">
                            <label for="realty">Недвижимость</label>
                            <select name="realty_id" id="realty">
                              @foreach ($realties as $key => $value)
                                <option value="{{ $value->id }}">
                                  {{ $value->object->descriptionObject }}
                                  {{ $value->property->descriptionType }}
                                  {{ $value->totalArea }} кв.м.
                                </option>
                              @endforeach
                            </select>
                          </div>

                          <div class="mainpage-select">
                            <label for="service">Вид сделки</label>
                            <select name="service_id" id="service">
                              @foreach ($services as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->description }}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                              <label for="price" class="col-md-4 control-label">Стоимость</label>

                              <div class="col-md-6">
                                  <input id="price" type="number" class="form-control" name="price" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="dateOfDeal" class="col-md-4 control-label">Дата сделки</label>

                              <div class="col-md-6">
                                  <input id="dateOfDeal" type="number" class="form-control" name="dateOfDeal" required>
                              </div>
                          </div>

                          <input type="hidden" name="status" class="hidden-field" value="open">

                          <div class="button-container">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Заключить
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a class="btn btn-primary" href="{{ url('clientRealties') }}">
                                        Назад
                                    </a>
                                </div>
                            </div>
                          </div>

                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>


@endsection
