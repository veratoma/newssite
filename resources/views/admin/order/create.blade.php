@extends('layouts.admin')
@section ('content')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"> Заказ</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            
            </div>
          </div>

          <div>
            <form method="post" action = "{{ route ('admin.order.store') }}">
              @csrf
            <div class = "form-group">
           
            <p>Имя <input type="text" id="firstName"  name="firstName" class="form-control"/></p>
            <p>Фамилия <input type="text" id= "lastName" name="lastName" class="form-control"/></p>
                
           </div>

     
          <div>
            <form method="post" action = "{{ route ('admin.order.store') }}"></form>
            <div class = "form-group">
                <label for="phone">Телефон</label>
                <input type="tel" id= "phone" name = "phone" class="form-control" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">

           </div>

        

       <div>
            <form method="post" action = "{{ route ('admin.order.store') }}"></form>
            <div class = "form-group">
                <label for="email">Email</label>
                <input type="email" id= "email" name = "email" class="form-control" >

           </div>


           <div>
            <form method="post" action = "{{ route ('admin.order.store') }}"></form>
            <div class = "form-group">
                <label for="description">Комментарии</label>
                <textarea id= "description" name = "description" class="form-control"></textarea>
               
           </div>

           <br>

           <button type = "submit" class="btn btn-success">Сохранить</button>
 

          </div>
          </form>


@endsection

