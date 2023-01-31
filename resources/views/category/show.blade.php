@section ('news')
@extends('layouts.main')


<div class="row mb-2">
@foreach ($news as $n)



        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">{{$n['autor']}}</strong>
              <h3 class="mb-0">
              {{ $n['title'] }}
              </h3>
              <div class="mb-1 text-muted">{{$n['created_at']}} </div>
              <p class="card-text mb-auto">{!! $n['description']  !!} </p>
              <a href="{{ route('news.show', ['id' => $n['id']]) }}">Далее</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
       
          </div>
    

@endforeach 
</div>
@endsection