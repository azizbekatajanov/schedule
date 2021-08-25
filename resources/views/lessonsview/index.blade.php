@extends('layouts.dashboard-layout')
@section('content')

    <section class="content-header">
           <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Предметы</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route('lessons.create')}}" class="btn btn-success">Добавить предмет</a>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th class="col-6">Имя</th>
            <th class="col-4">Краткое имя</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lessons as $lesson)
            <tr>
                <td>{{$lesson->id}}</td>
                <td>{{$lesson->name}}</td>
                <td>{{$lesson->short_name}}</td>
                <td>
                    <a class="btn btn-warning" href = "{{ route ('lessons.edit', $lesson->id) }}"><i class="fas fa-edit"></i></a>
                </td>
                <td class="pl-lg-0">
                    <form action="{{ route('lessons.destroy', $lesson->id)}}" method="post">
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
