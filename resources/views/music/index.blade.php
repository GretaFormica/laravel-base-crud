<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>music</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
</head>
<body>
    
    <div class="container p-5">

        <a href="{{ route('music.create')}}" class="btn btn-primary my-5">create music</a>
    
        <div class="row">
            
            @foreach($music as $music)
            
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $music->title}}</h5>
                        <h5 class="card-title">Album: {{ $music->album}}</h5>
                        <h5 class="card-title">Autore: {{ $music->author}}</h5>
                        <h5 class="card-title">Editor: {{ $music->editor}}</h5>
                        <h5 class="card-title">Durata: {{ $music->length}}</h5>
                        <h5 class="card-title">Poster: {{ $music->poster}}</h5>
                        <a href="{{ route('music.show', ['music' => $music])}}">dettaglio</a>
                        <a href="{{ route('music.edit', ['music' => $music])}}">modifica</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            elimina
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">conferma eliminazione</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                sicuro di voler eliminare il record?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annulla</button>

                                <form action="{{ route('music.destroy', $music) }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">elimina</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>