@extends('layouts.dashboard-layout')
@section('content')

    <section class="content-header">
           <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Расписание</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route('schedules.create')}}" class="btn btn-success">Добавить предмет</a>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>День недели</th>
            <th>Начало</th>
            <th>Конец</th>
            <th>Группа</th>
            <th>Предмет</th>
            <th>Аудитория</th>
            <th>Преподаватель</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schedules as $schedule)
            <tr>
                <td>{{$schedule->date}}</td>
                <td>{{$schedule->start_time}}</td>
                <td>{{$schedule->end_time}}</td>
                <td>{{$schedule->group->name}}</td>
                <td>{{$schedule->lesson->name}}</td>
                <td>{{$schedule->room->name}}</td>
                <td>{{$schedule->teacher->fullname()}}</td>
                <td>
                    <a class="btn btn-warning" href = "{{ route ('schedules.edit', $schedule->id) }}"><i class="fas fa-edit"></i></a>
                </td>
                <td class="pl-lg-0">
                    <form action="{{ route('schedules.destroy', $schedule->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
