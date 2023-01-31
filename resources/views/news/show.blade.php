@section ('NewsList')
@extends('layouts.main')
  
  <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">{{ $news['title'] }}</h2>
            <p class="blog-post-meta">{{$news['created_at']}} by {{$news['autor']}}</p>

            <p> {!! $news['description']  !!} </p>
            
          </div><!-- /.blog-post -->

</main>
   
@endsection 
   
   
   