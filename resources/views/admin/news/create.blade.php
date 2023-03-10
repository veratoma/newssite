@extends('layouts.admin')
@section ('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
     <h1 class="h2"> Добавить новость</h1>
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

     <form method="post" action="{{ route('admin.news.store') }}">
          @csrf
          <div class="form-group">
               <label for="categories_id">Категория</label>
               <select class="form-control" name="categories_id" id="categories_id">
                    <option value="0"> -- Выбрать --</option>
                    @foreach($categoriesList as $categories)
                    <option @if((int)old('categories_id')===$categories->id) selected @endif value="{{$categories->id}}"> {{$categories->title}} </option>
                    @endforeach
               </select>

          </div>

          <div class="form-group">
               <label for="title">Заголовок</label>
               <input type="text" id="title" name="title" class="form-control">
          </div>


          <div>
               <form method="post" action="{{ route ('admin.news.store') }}"></form>
               <div class="form-group">
                    <label for="author">Автор</label>
                    <input type="text" id="author" name="author" class="form-control">
               </div>

               <div class="form-group">
                    <label for="status">Статус</label>
                    <select class="form-control" name="status" id="status">

                         @foreach($statuses as $status)
                         <option @if(old('status')===$status) selected @endif> {{$status}} </option>
                         @endforeach

                    </select>

                    <div>

                         <div>
                              <div class="form-group">
                                   <label for="image">Изображение</label>
                                   <input type="file" id="image" name="image" class="form-control">
                              </div>

                              <form method="post" action="{{ route ('admin.news.store') }}"></form>
                              <div class="form-group">
                                   <label for="description">Описание</label>
                                   <textarea class="form-control" id="description" name="description"></textarea>

                              </div>

                              <br>

                              <button type="submit" class="btn btn-success">Сохранить</button>


                         </div>
     </form>


     @endsection