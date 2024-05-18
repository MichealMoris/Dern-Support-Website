<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" integrity="SHA384-ikxnSRzDqBm8FHsCEg3BTQXhWCanqHxnbSQXaRBgn1lq9IW7rtDAzPRi4z1KusQz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<style>
    .window {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    text-align: center;
}
</style>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="window">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 text-start">
                        <h4>Welcome, {{Auth::user()->name}}!</h4>
                    </div>
                    <div class="col-6 text-end">
                        @if (Auth::user()->privilege == "admin")
                            <a type="button" class="text-decoration-none text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-plus-lg fs-4"></i>
                            </a>
                        @endif
                        <a href="/logout" class="text-decoration-none text-danger ms-1">
                            <i class="bi bi-box-arrow-right fs-4"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="fw-bold">Our Services</p>
                </div>
                <div class="row mt-2">
                    @foreach ($service as $s)
                        <div class="col-12 mb-2">
                            <div class="p-1 bg-warning rounded">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">{{$s["serviceName"]}}</h6>
                                        <p class="card-text">{{$s["serviceDescription"]}}</p>
                                        <h6>{{$s["servicePrice"]}}</h6>
                                        @if (Auth::user()->privilege == "admin")
                                    <form action={{"/deleteService/".$catID."/".$s["id"]}} method="post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-outline-dark">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>
                                    <a href={{"/editService/".$catID."/".$s["id"]}} type="button" class="btn btn-outline-dark mt-1">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <p>&copy; 2024 All rights reserved for Micheal Moris.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service to this Category</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action={{"/addService/".$catID}}>
                    @csrf
                    <div class="form-group">
                        <label for="serviceName">Service Name</label>
                        <input type="text" name="serviceName" id="serviceName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="serviceDescription">Service Description</label>
                        <input type="text" name="serviceDescription" id="serviceDescription" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="servicePrice">Service Price</label>
                        <input type="text" name="servicePrice" id="servicePrice" class="form-control">
                    </div>
                    <input type="submit" value="Done" class="btn btn-primary mt-2">
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>