<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<style>
    html, body {
      height: 100%;
    }
    .center-form {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }
    .form-container {
      width: 100%;
      max-width: 600px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
</style>
<body>
    <div class="container center-form">
        <div class="form-container">
            <h2 class="text-center">Login</h2>
            <p class="text-center">Please fill the fields below correctly so we can log you in.</p>
          <form method="POST" action="/login">
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="password" class="mt-2">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-2">Login</button>
          </form>
          <p class="text-center mt-3">
            <a href="/register" class="text-dark text-decoration-none">Don't have an Account. <span class="text-primary fw-bold">Sign Up?</span></a>
          </p>
        </div>
      </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>