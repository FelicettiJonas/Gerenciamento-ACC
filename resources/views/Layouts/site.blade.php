<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/site.css')}}" media="screen" />
    <title>Bote um titulo AKI</title>
</head>
<body>

    <div class="fixed-top bg-light title">
        <h1>Tituloadsfasdfasdf</h1>
        <h2>asdasdasdasas</h2>
    </div>
    <div class="flex">
    <nav class="navbar navbar-expand-lg bg-light sidebar fixed-top">
        <div class="container-block nav">
          <a class="navbar-brand" href="#">logo</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
            <a class="navbar-brand fixed-bottom" href="#">img logoff</a>
        </div>
    </nav>


    @yield('content')
</div>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>