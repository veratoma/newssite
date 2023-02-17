@extends('layouts.admin')
@section ('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2"> Редактировать категорию</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">

    </div>

  </div>
</div>

<div>
  @if ($errors->any())
  @foreach ($error->all() as $error)
  <x-alert type="danger" :message="$error"></x-alert>
  @endforeach
  @endif

  <form method="post" action="{{ route('admin.categories.update', ['category' => $category]) }}">
    @csrf
    @method('put')




    <div class="form-group">
      <label for="title">Заголовок</label>
      <input type="text" id="title" name="title" value="{{$category->title}}" class="form-control">
    </div>



    <div>

      <div>
        <div class="form-group">
          <label for="image">Изображение</label>
          <input type="file" id="image" name="image" class="form-control">
        </div>

        <form method="post" action="{{ route ('admin.categories.update', ['category' => $category]) }}"></form>
        <div class="form-group">
          <label for="description">Описание</label>
          <textarea class="form-control" id="description" name="description">{!! $category->description !!}</textarea>

        </div>

        <br>

        <button type="submit" class="btn btn-success">Сохранить</button>

      </div>
    </div>
  </form>


  @endsection