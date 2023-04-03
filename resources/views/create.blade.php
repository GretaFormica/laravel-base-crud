<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
    <div class="container my-5">

        <form action="{{ route('music.store') }}" method="POST">
            @csrf

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group col-md-6">
                    <label for="album">Album</label>
                    <input type="text" class="form-control" id="album" name="album">
                </div>

                <div class="form-group col-md-6">
                    <label for="author">Autore</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>

                <div class="form-group col-md-6">
                    <label for="editor">Editor</label>
                    <input type="text" class="form-control" id="editor" name="editor">
                </div>

                <div class="form-group col-md-6">
                    <label for="length">Durata</label>
                    <input type="number" class="form-control" id="length" name="length">
                </div>

                <div class="form-group col-md-6">
                    <label for="poster">Poster</label>
                    <input type="text" class="form-control" id="poster" name="poster">
                </div>

                
            </div>
            
            <button type="submit" class="btn btn-primary my-4">Salva</button>
        </form>
    </div>
</body>
</html>