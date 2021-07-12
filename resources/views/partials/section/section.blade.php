<section>
    <div class="container ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">age</th>
                    <th scope="col">nom</th>
                    <th scope="col">genre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($membres as $membre)
                    <tr>
                        <th scope="row">{{ $membre->id }}</th>
                        <td>{{ $membre->age }}</td>
                        <td>{{ $membre->nom}}</td>
                        <td>{{ $membre->genre }}</td>
                        <td><form action="/membresdelete/{{ $membre->id }}}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-white">DELETE</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</section>

<section>
    <form class="container mb-5" action="/membrespost" method="post"  >
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">age</label>
            <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <select class="form-select w-25" name="genre"  aria-label="Default select example">
                <option value="hommes">Hommes</option>
                <option value="femmes">Femmes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
