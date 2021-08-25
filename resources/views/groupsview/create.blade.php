@extends('layouts.dashboard-layout')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить группу</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('groups.store')}}" method="POST">
            @csrf
            <div class="card-body p-5">
                <div class="form-group">
                    <label for="name">Названия/Номер группы</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Названия/Номер группы" value="{{old('name')}}">
                </div>
                @error('name')
                <p>{{$message}}</p>
                @enderror
                <div class="form-group">
                    <label for="course">Курс</label>
                    <select class="form-control form-control-lg" name="course" id="course">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
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
