<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">

        <div class="row">

                <h1>MODIFIER UN CONTACT</h1>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger"> {{ $error }} </li>
                    @endforeach
                </ul>

                <form action="/update/traitement" method="POST" class="form-group">
                    @csrf

                    <input type="text" name="id" style="display: none;" value="{{ $contacts->id}}">

                    <br> <br/>
                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="text" class="form-control" id="Nom" name="nom" value="{{ $contacts->nom}}">
                    </div>
                    <br> <br/>

                    <div class="form-group">
                        <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control" id="Nom" name="prenom"  value="{{ $contacts->prenom}}">
                    </div>
                    <br> <br/>

                        <div class="form-group">
                            <label for="Telephone">Telephone</label>
                            <input type="text" class="form-control" id="Telephone" name="telephone"  value="{{ $contacts->telephone}}">
                        </div>
                    
                        <br> <br/>
                    <button type="submit" class="btn btn-primary">MODIFIER UN CONTACT</button>

                    <br> <br/>

                    <a href="/contact" class="btn btn-danger">Retour</a>
                  </form>
                    
              
          </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>