@extends('layouts.master')
@section('content')
<form action="{{ route('employees.update', $post['id']) }}" method="POST">
    @method('PUT') @csrf 
    <input type="text" name="Darbuotojas" value="{{ $post['Darbuotojas'] }}"><br>
    {{-- <input type="text" name="text" value="{{ $post['text'] }}"><br> --}}
    <input class="btn btn-primary" type="submit" value="UPDATE">
</form>
@endsection

