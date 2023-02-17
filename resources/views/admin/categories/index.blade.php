@extends('layouts.admin')
@section ('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2"> Список категорий</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

        </div>

    </div>
    <a href="{{ route('admin.categories.create')}}">Добавить категорию</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Заголовок</th>
                <th>Описание</th>
                <th>Дата добавления</th>
                <th>Дата обновления</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categoriesList as $categories)
            <tr>
                <td>{{$categories->id}}</td>
                <td>{{$categories->title}}</td>
                <td>{{$categories->description}}</td>
                <td>{{$categories->created_at}}</td>
                <td>{{$categories->updated_at}}</td>
                <td><a href="{{route ('admin.categories.edit', ['category' => $categories])}}">Изм.</a>&nbsp; <a href="" style="color: red;">Уд.</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="7">Записей нет</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $categoriesList->Links()}}
</div>

@endsection