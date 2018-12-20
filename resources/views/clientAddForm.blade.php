@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Register</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/clientAdd') }}">
                          {{ csrf_field() }}

                          <div class="mainpage-select">
                            <label for="object">Тип объекта</label>
                            <select name="object_id" id="object">
                              @foreach ($objects as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->descriptionObject }}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="mainpage-select">
                            <label for="house">Вид недвижимости</label>
                            <select name="house_id" id="house">
                              @foreach ($houses as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->descriptionHouse }}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="mainpage-select">
                            <label for="property">Вид объекта</label>
                            <select name="property_id" id="property">
                              @foreach ($properties as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->descriptionType }}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                              <label for="numberOfRooms" class="col-md-4 control-label">Количество комнат</label>

                              <div class="col-md-6">
                                  <input id="numberOfRooms" type="number" class="form-control" name="numberOfRooms" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="totalArea" class="col-md-4 control-label">Общая площадь</label>

                              <div class="col-md-6">
                                  <input id="totalArea" type="number" class="form-control" name="totalArea" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="floor" class="col-md-4 control-label">Этаж</label>

                              <div class="col-md-6">
                                  <input id="floor" type="text" class="form-control" name="floor" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="floors" class="col-md-4 control-label">Количество этажей</label>

                              <div class="col-md-6">
                                  <input id="floors" type="text" class="form-control" name="floors" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="price" class="col-md-4 control-label">Цена</label>

                              <div class="col-md-6">
                                  <input id="price" type="text" class="form-control" name="price" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="city" class="col-md-4 control-label">Город</label>

                              <div class="col-md-6">
                                  <input id="city" type="text" class="form-control" name="city" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="street" class="col-md-4 control-label">Улица</label>

                              <div class="col-md-6">
                                  <input id="street" type="text" class="form-control" name="street" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="numberHouse" class="col-md-4 control-label">Номер дома</label>

                              <div class="col-md-6">
                                  <input id="numberHouse" type="text" class="form-control" name="numberHouse" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="apartment" class="col-md-4 control-label">Квартира</label>

                              <div class="col-md-6">
                                  <input id="apartment" type="text" class="form-control" name="apartment" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="descript" class="col-md-4 control-label">Описание</label>

                              <div class="col-md-6">
                                  <input id="descript" type="text" class="form-control rich-text-box" name="descript" required>
                              </div>
                          </div>

                          <input type="hidden" name="status" class="hidden-field" value="open">

                          <div class="button-container">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Сохранить
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
