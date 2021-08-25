@extends('layouts.home-layout')
@section('content')

        <section class="content-header">
            <div class="container-fluid">
                <h2 class="text-center display-4">Поиск</h2>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('homepage')}}" method="GET" role="search">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Преподаватель:</label>
                                        <select class="select2" name="teacher_id" data-placeholder="Выберите преподаватель" style="width: 100%;">
                                            <option selected value="">Выберите преподавателя</option>
                                            @foreach($teachers as $teacher)
                                                <option value="{{$teacher->id}}">{{$teacher->fullname()}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Группа:</label>
                                        <select class="select2" name="group_id" style="width: 100%;" data-placeholder="Выберите группу">
                                            <option value="" selected>Выберите группу</option>
                                            @foreach($groups as $group)
                                                <option value="{{$group->id}}">{{$group->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Аудитория:</label>
                                        <select class="select2" name="room_id" style="width: 100%;" data-placeholder="Выберите аудиторию">
                                            <option value="" selected>Выберите аудиторию</option>
                                            @foreach($rooms as $room)
                                                <option value="{{$room->id}}">{{$room->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Отфильтровать">
                        </div>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-md-10 offset-md-1">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col px-4">
                                        <div>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>День</th>
                                                        <th>Начало</th>
                                                        <th>Конец</th>
                                                        <th>Аудитория</th>
                                                        <th>Предмет</th>
                                                        <th>Преподаватель</th>
                                                        <th>Группа</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($schedule as $el)
                                                    <tr>
                                                    <td>{{$el->date}}</td>
                                                    <td>{{$el->start_time}}</td>
                                                    <td>{{$el->end_time}}</td>
                                                    <td>{{$el->room->name}}</td>
                                                    <td>{{$el->lesson->name}}</td>
                                                    <td>{{$el->teacher->fullname()}}</td>
                                                    <td>{{$el->group->name}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

@endsection
