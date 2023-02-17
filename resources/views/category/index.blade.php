@section ('content')
@extends('layouts.main')

<div class="row mb-2">
  @foreach ($category as $n)


  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">

        <h3 class="mb-0">
          {{$n['title']}}
        </h3>


        <a href="{{ route('category.show', ['categoryid' => $n['id']]) }}">Далее</a>
      </div>

    </div>
  </div>

  @endforeach
</div>
@endsection