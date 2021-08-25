@extends('layouts.dashboard-layout')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить предмет</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('teachers.store')}}" method="POST">
            @csrf
            <div class="card-body p-5">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="{{old('name')}}">
                </div>
                @error('name')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="surname">Фамилия</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Фамилия" value="{{old('surname')}}">
                </div>
                @error('short_name')
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
                <button type="submit" class="float-right btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>

@endsection
