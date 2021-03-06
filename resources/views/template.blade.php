<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBKK | {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">PBKK Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('input-form') }}">Input Form</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('input-form-guest') }}">Form Guest</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('article') }}">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('categories') }}">Categories</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
