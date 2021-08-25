@extends('layouts.dashboard-layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактировать данные преподавателя</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('teachers.update', $teacher->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-bsody">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="{{$teacher->name}}">
                </div>
                @error('name')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="surname">Фамилия</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Фамилия" value="{{$teacher->surname}}">
                </div>
                @error('surname')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="degree">Научный степень</label>
                    <select class="form-control form-control-lg" name="degree" id="degree">
                        <option>Ассистент</option>
                        <option>Преподаватель</option>
                        <option>Старший преподаватель</option>
                        <option>Доцент</option>
                        <option>Профессор</option>
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
