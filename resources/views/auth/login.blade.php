<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <span class="display-5">Efetuar Login</span>
    </div>
    <div class="row justify-content-center align-items-center g-2">

        <form action="{{route('deflogin')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text"
                class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Insira o seu Email</small>

                @error('email')
                    <span class="badge bg-warning">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Senha</label>
                <input type="password"
                class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Insira a sua Senha</small>

                @error('password')
                    <span class="badge bg-warning">{{$error}}</span>
                @enderror
            </div>
            
            <button class="btn btn-primary">Login</button>
            @if ($message = Session::get('errorAuthenticate'))
                <span class="badge bg-warning">{{$message}}</span>
            @endif

        </form>
    </div>
</div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>