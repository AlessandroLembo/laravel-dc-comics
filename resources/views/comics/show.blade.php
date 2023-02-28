@extends('layouts.main')

@section('title', $comic->series)

@section('content')
<div>
    <h1>{{$comic->series}}</h1>
</div>
@endsection