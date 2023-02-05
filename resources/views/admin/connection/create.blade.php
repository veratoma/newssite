@extends('layouts.admin')
@section ('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"> Обратная связь</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            
            </div>
          </div>

          <div>
            <form method="post" action = "{{ route ('connection.store') }}">
            @csrf
            <div class = "form-group">
            <p>Имя <input type="text" id="firstName"  name="firstName" class="form-control"/></p>
            <p>Фамилия <input type="text" id= "lastName" name="lastName" class="form-control"/></p>
           </div>

           
          
           <div>
            <form method="post" action = "{{ route ('connection.store') }}"></form>
            <div class = "form-group">
                <label for="description">Отзыв</label>
                <textarea id= "description" name = "description" class="form-control"></textarea>
               
           </div>

           <br>

           <button type = "submit" class="btn btn-success">Сохранить</button>
 

          </div>
          </form>


@endsection

