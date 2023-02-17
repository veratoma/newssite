@extends('layouts.admin')
@section ('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2"> Добавить катeгорию</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">

    </div>

  </div>
</div>

<div>
  <form method="post" action="{{ route('admin.categories.store') }}">
    @csrf
    <div class="form-group">
      <label for="title">Категории</label>
      <input type="text" id="title" name="title" class="form-control">
    </div>



    <div>
      <form method="post" action="{{ route ('admin.categories.store') }}"></form>
      <div class="form-group">
        <label for="description">Описание</label>
        <textarea class="form-control" id="description" name="description"></textarea>

      </div>

      <br>

      <button type="submit" class="btn btn-success">Сохранить</button>


    </div>
  </form>


  @endsection