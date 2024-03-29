<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center">

        <div class="row">

            <div class="col s12">
                <h1>CONTACTS</h1>
                <hr>
                    <a href="/ajouter" class="btn btn-primary">Ajouter un contact</a>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success">
                             {{session('status')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                            $ide = 1;  
                          @endphp
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->nom }}</td>
                                <td>{{ $contact->prenom }}</td>
                                <td>{{ $contact->telephone }}</td>
                                <td>
                                    <a href="/update-contact/{{ $contact->id }}" class="btn btn-info">Update</a>
                                    <a href="/delete-contact/{{ $contact->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @php 
                            $ide += 1;
                            @endphp
                            @endforeach

                            
                        </tbody>
                    </table>

                    {{ $contacts->links() }}
              
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>