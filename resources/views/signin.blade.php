<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('styles/signin.css')}}" rel="stylesheet">
    <link href="{{asset('styles/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body class="text-center">

<main class="form-signin">
    <form action="" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
            <label for="username">Username</label>
        </div>
        @error('username')
        <p>{{$message}}</p>
        @enderror
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
        @error('password')
        <p>{{$message}}</p>
        @enderror

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
</main>

</body>
</html>
