<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">

    <div class="col S12">
    <h1>modifier </h1>
    <hr>
    
    @if (session('status'))
    <div class="alert alert-succès">
        {{session('status')}}
    </div>
    @endif
    <ul>
        @foreach ($errors ->all() as $error)
        <li class="alert alert-danger"> {{$error}} </li>
         @endforeach
    </ul>

    <form action="/update/traitement" method="POST" class="form-group">
        @csrf
        <input type="text" name="id" style="display: none;" value="{{ $friends->id}}">
        <div class="form-group">
          <label for="nom">NOM</label>
          <input type="text" class="form-control" id="nom" name="nom" value="{{ $friends->nom}}">
        </div>
        <div class="form-group">
            <label for="prenom" class="form-label">PRENOM</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $friends->prenom}}">
          </div>
          <div class="form-group">
            <label for="classe">EMAIL</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $friends->email}}">
          </div>
          <br>
        <button type="submit" class="btn btn-primary">MODIFIER UN AMI</button>
        <br> <br>

        <a href="/friend" class="bnt bnt-danger">Revenir a la liste </a>
      </form>
    
    </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html