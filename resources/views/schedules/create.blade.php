@extends('layouts.dashboard-layout')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить предмет</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('schedules.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="room">Выберите комнату</label>
            <select name="room" class="form-select form-control">
                <option selected>Выберите комнату</option>
                @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{$room->name}}</option>
                @endforeach
            </select>
            </div>

            <div class="form-group">
                <label for="lesson">Выберите предмет</label>
                <select name="lesson" class="form-select form-control">
                    <option selected>Выберите предмет</option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}">{{$lesson->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="teacher">Выберите преподавателя</label>
                <select name="teacher" class="form-select form-control">
                    <option selected>Выберите преподавателя</option>
                    @foreach($teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="group">Выберите группу</label>
                <select name="group" class="form-select form-control">
                    <option selected>Выберите группу</option>
                    @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="timepicker-placeholder">Time picker with placeholder</label>
                    <b-form-timepicker id="timepicker-placeholder" placeholder="Choose a time"></b-form-timepicker>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="float-right btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>

@endsection
