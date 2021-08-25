@extends('layouts.dashboard-layout')
@section('content')

    <section class="content-header">
           <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Комнаты</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route('rooms.create')}}" class="btn btn-success">Добавить комнату</a>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="col-1">ID</th>
            <th class="col-4">Названия/Номер аудитории</th>
            <th class="col-4">Количество мест</th>
            <th class="col-2">Тип комнаты</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->name}}</td>
                <td>{{$room->seats_count}}</td>
                <td>{{$room->type}}</td>
                <td>
                    <a class="btn btn-warning" href = "{{ route ('rooms.edit', $room->id) }}"><i class="fas fa-edit"></i></a>
                </td>
                <td class="pl-lg-0">
                    <form action="{{ route('rooms.destroy', $room->id)}}" method="post">
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
