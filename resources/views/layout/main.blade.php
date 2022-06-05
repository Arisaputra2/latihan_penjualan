<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Penjualan Saya</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">Wellcome</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/"></a>
        </li>
        <form action="/" method="POST">
        @csrf
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/">Logout</a>
        </li>
      </form>
      </ul>  

    </div>
  </nav>

  <div class="container-fluid">
    <div class="container">
        @yield('section')
    </div>
  </div>
</body>
</html>