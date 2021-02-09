
@extends('layouts.master')
@section('content')
<table class="table table-striped">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Projektas</th>
        <th scope="col">Darbuotojas</th>
        <th scope="col">Veiksmas</th>
      </tr>
    </thead>
{{-- Kad isprintintu darbuotojus i ekrana --}}
    <tbody>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post['id'] }}</td>
        <td>{{ $post['Projektas'] }}</td> 
    <td style="display: flow-root">
    @foreach ($post->employees as $emp)
    {{ $emp['Darbuotojas']. " " }} 
    @endforeach
    </td>
        <td>
             {{-- delete --}}
        <form action="{{ route('projects.destroy', $post['id']) }}" method="POST">
            @method('DELETE') @csrf
          <input class="btn btn-danger" type="submit" value="DELETE">
    </form>
    {{-- Update --}}
    <form action="{{ route('projects.show', $post['id']) }}" method="GET">
        <input class="btn btn-primary" type="submit" value="UPDATE">
    </form>
        </td>
    </tr>
  
    @endforeach
</tbody>
</table>
    {{-- Kad ikeltume nauja projekta --}}
    <hr>
        <form method="POST" action="/projects">
            @csrf
            <label for="title">Darbuotojo vardas:</label><br>
            <input type="text" id="id" name="Projektas" placeholder="name"><br>
            {{-- <label for="text">Projektas</label><br>
            <input type="text" id="text" name="text"><br><br> --}}
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
@endsection