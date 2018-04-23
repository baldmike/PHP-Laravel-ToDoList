@extends('layouts.app')

@section('content')

<h1>This is the {{$title}} page.</h1>
<h2>Here's what I like:
  @if (count($likes) > 2)

    @foreach ($likes as $like)
      <li>{{$like}}</li>
    @endforeach
    
  @endif
</h2>

<a href="/"><button>index</button></a>

@endsection