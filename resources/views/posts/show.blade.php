@extends('layout.app')

@section('content')
<style>
h1{
    color: azure;
}
    </style>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>{{$post->title}}</h1>

<div>
{{$post->body}}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>

<br>
<br>
<br>
<br>
<br>
<br>


@endsection
