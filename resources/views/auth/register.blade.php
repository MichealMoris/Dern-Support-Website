<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
            <h2 class="text-center">Register</h2>
            <p class="text-center">Please fill all the fields below to register a new account.</p>
          <form method="POST" action="/register">
            @csrf
            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
            <div class="form-group mt-2">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group mt-2">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <select name="privilage" class="form-select mt-3">
                <option selected disabled>-Select Privilege-</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
              </select>
            <button type="submit" class="btn btn-primary btn-block mt-2">Done</button>
          </form>
          <p class="text-center mt-3">
            <a href="/login" class="text-dark text-decoration-none">Already have an Account. <span class="text-primary fw-bold">Sign In?</span></a>
          </p>
        </div>
      </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>