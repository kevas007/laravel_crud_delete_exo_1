@extends('template.main')
@section('content')
<section>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Femmes</th>
                    <th scope="col">age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($femmes as $femme)
                    <tr>
                        <th scope="row">{{ $femme->id }}</th>
                        <td>{{ $femme -> genre }}</td>
                        <td>{{ $femme -> age }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a class="nav-link active" href="/">Crée un membre</a>
</section>

@endsection
