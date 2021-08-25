@extends('layouts.dashboard-layout')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить расписанию</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card card-primary align-items-center">
        <form action="{{route('schedules.store')}}" method="POST" >
            @csrf

            <div class="form-group">
                <label for="date">Дата</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="start_time">Начало урока:</label>

                <input type="time" class="mr-5" id="end_time" name="start_time"
                       min="08:30" max="18:00" required>

                <label for="end_time">Конец урока:</label>

                <input type="time" id="end_time" name="end_time"
                       min="08:30" max="18:00" required>
           </div>

            <div class="form-group">
                <label for="group">Выберите группу</label>
                <select name="group_id" class="form-select form-control">
                    <option selected>Выберите группу</option>
                    @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="lesson">Выберите предмет</label>
                <select name="lesson_id" class="form-select form-control">
                    <option selected>Выберите предмет</option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}">{{$lesson->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room">Выберите комнату</label>
            <select name="room_id" class="form-select form-control">
                <option selected>Выберите комнату</option>
                @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{$room->name}}</option>
                @endforeach
            </select>
            </div>

            <div class="form-group">
                <label for="teacher">Выберите преподавателя</label>
                <select name="teacher_id" class="form-select form-control">
                    <option selected>Выберите преподавателя</option>
                    @foreach($teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->fullname()}}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-footer">
                <button type="submit" class="float-right btn btn-primary">Добавить</button>
            </div>
        </form>
        </div>
    </div>
@endsection
