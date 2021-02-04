@extends('layouts.master')
@section('content')
{{-- Kad isprintintu darbuotojus i ekrana --}}
    @foreach ($posts as $post)
        <h1>{{ $post['id'] }}</h1>
        <h1>{{ $post['Darbuotojas'] }}</h1>
     
    @endforeach

{{-- Kad ikeltume nauja darbuotoja --}}
<hr>
    <form method="POST" action="/">
        @csrf
        <label for="title">Darbuotojo vardas:</label><br>
        <input type="text" id="id" name="Darbuotojas"><br>
        {{-- <label for="text">Projektas</label><br>
        <input type="text" id="text" name="text"><br><br> --}}
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>

@endsection

