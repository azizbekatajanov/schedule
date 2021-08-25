@extends('layouts.dashboard-layout')
@section('content')

    <section class="content-header">
           <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Преподаватели</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route('teachers.create')}}" class="btn btn-success">Добавить преподавателя</a>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="col-1">ID</th>
            <th class="col-4">Ф.И.О</th>
            <th class="col-4">Степень</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->fullname()}}</td>
                <td>{{$teacher->degree}}</td>
                <td>
                    <a class="btn btn-warning" href = "{{ route ('teachers.edit', $teacher->id) }}"><i class="fas fa-edit"></i></a>
                </td>
                <td class="pl-lg-0">
                    <form action="{{ route('teachers.destroy', $teacher->id)}}" method="post">
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
