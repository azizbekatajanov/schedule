@extends('layouts.dashboard-layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактировать предмет</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('lessons.update', $lesson->id)}}" method="POST">
            <input type="hidden" name="id" value='{{$lesson->id}}'>
            @csrf
            @method('PUT')
            <div class="card-bsody">
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Полное название предмета" value="{{$lesson->name}}">
                </div>
                @error('name')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="short_name">Краткое название</label>
                    <input type="text" name="short_name" class="form-control" id="short_name" placeholder="Краткок название предмета" value="{{$lesson->short_name}}">
                </div>
                @error('short_name')
                <p>{{$message}}</p>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
        </form>
    </div>
@endsection
