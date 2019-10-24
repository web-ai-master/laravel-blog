@extends ('layouts.app')

@section('content')
     <a herf="/posts/" class="btn btn-default">Go back </a>
     <h1>{{$post->title}}</h1>
    
     <div>
         {{$post->body}}
         <hr>
         <small>Written on {{$post->created_at}}</small>
     </div>
  
@endsection