
@extends('layouts.master')
@section('content')
<table class="table table-striped">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Darbuotojas</th>
        <th scope="col">Projektas</th>
        <th scope="col">Veiksmas</th>
      </tr>
    </thead>
{{-- Kad isprintintu darbuotojus i ekrana --}}
    <tbody>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post['id'] }}</td>
        <td>{{ $post['Darbuotojas'] }}</td> 
        <td>{{ $post->projects['Projektas'] }}</td>
       {{-- delete --}}
       <td>
        <form action="{{ route('employees.destroy', $post['id']) }}" method="POST">
                @method('DELETE') @csrf
              <input class="btn btn-danger" type="submit" value="DELETE">
        </form>
        {{-- update forma --}}
        <form action="{{ route('employees.show', $post['id']) }}" method="GET">
            <input class="btn btn-primary" type="submit" value="UPDATE">
        </form>

        </td>
    </tr>
  
    @endforeach
</tbody>
</table>
{{-- Kad ikeltume nauja darbuotoja --}}
<hr>
    <form method="POST" action="/">
        @csrf
        <label for="title">Darbuotojo vardas:</label><br>
        <input type="text" id="id" name="Darbuotojas" placeholder="name"><br>
        {{-- <select id="projects_id" name="projects_id">
        <option value="id">{{ $post['projects'] }}</option> 
        </select> --}}
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>

@endsection

