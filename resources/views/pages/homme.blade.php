@extends('template.main')
@section('content')
<section>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hommes</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hommes as $homme)
                    <tr>
                        <th scope="row">{{ $homme->id }}</th>
                        <td>{{ $homme-> genre}}</td>
                        <td>{{ $homme-> age}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a class="nav-link active" href="/">Crée un membre</a>

</section>
@endsection
