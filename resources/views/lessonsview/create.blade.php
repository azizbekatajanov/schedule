@extends('layouts.dashboard-layout')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить предмет</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('lessons.store')}}" method="POST">
            @csrf
            <div class="card-body p-5">
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Полное название предмета" value="{{old('name')}}">
                </div>
                @error('name')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="short_name">Краткое название</label>
                    <input type="text" name="short_name" class="form-control" id="short_name" placeholder="Краткок название предмета" value="{{old('short_name')}}">
                </div>
                @error('short_name')
                <p>{{$message}}</p>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="float-right btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>

@endsection
