@extends('layouts.dashboard-layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактировать данные аудитории</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('rooms.update', $room->id)}}" method="POST">
            <input type="hidden" name="id" value="{{$room->id}}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Названия/Номер аудитории</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Названия/Номер аудитории" value="{{$room->name}}">
                </div>
                @error('name')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="surname">Количество мест</label>
                    <input type="text" name="seats_count" class="form-control" id="seats_count" placeholder="Количество мест" value="{{$room->seats_count}}">
                </div>
                @error('seats_count')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="type">Тип аудитории</label>
                    <select class="form-control form-control-lg" name="type" id="type">
                        <option>Лекционный</option>
                        <option>Практический</option>
                        <option>Лабораторный</option>
                        <option>Зал</option>
                        <option>Спортзал</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
        </form>
    </div>
@endsection
