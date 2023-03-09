<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>projek Aldhita</title>
  </head>
  <body>
    <header><br>
    <h2 class="text-center">Book Store</h2>
    </header>
    <main class="container">
        <div class="table-responsive mt-5">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
            @foreach ($book as $m)
                <tr>
                    <td>{{ $m->nama_buku }}</td>
                    <td>{{ $m->penulis }}</td>
                    <td>{{ $m->harga }}</td>
                </tr>
            @endforeach
        </tbody>
            </table>   
        </div>
    </main>
  </body>
</html>