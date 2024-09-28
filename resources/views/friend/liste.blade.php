<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<div class="container text-center">
    <div class="row">

    <div class="col S12">
    <hr>
    <a href="/ajouter" class="bnt bnt-primary">Ajouter un ami</a>
        <hr>
        @if (session('status'))
        <div class="alert alert-succès">
            {{session('status')}}
        </div>
        @endif
        <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <Tbody>
            @foreach($friends as $friend)
            <tr>
                <td>{{ $friend->id }}</td>
                <td>{{ $friend->nom }}</td>
                <td>{{ $friend->prenom }}</td>
                <td>{{ $friend->email }}</td>
                <td>
                    <a href="/update-friend/{{ $friend->id }}" class="bnt bnt-info">Update</a>
                    <a href="/delete-friend/{{ $friend->id }}" class="bnt bnt-danger">DELETE</a>
                </td>
            </tr>
            @endforeach
        </Tbody>
    </table>
    </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html