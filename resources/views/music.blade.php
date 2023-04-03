<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>music</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    
    <div class="container p-5">
    
        <div class="row">
    
            
            @foreach($music as $music)
            
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $music->title}}</h5>
                        <h5 class="card-title">Album: {{ $music->album}}</h5>
                        <h5 class="card-title">Autore: {{ $music->author}}</h5>
                        <h5 class="card-title">Editor: {{ $music->editor}}</h5>
                        <h5 class="card-title">Durata: {{ $music->length}}</h5>
                        <a href="{{ route('music.show', ['music' => $music])}}">dettaglio</a>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>