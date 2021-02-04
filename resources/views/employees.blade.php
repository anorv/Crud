@extends('layouts.master')
@section('content')
<h1>Employees</h1>
    @foreach ($posts as $post)
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['text'] }}</p>
    @endforeach
@endsection

