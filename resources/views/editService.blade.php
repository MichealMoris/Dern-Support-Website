<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Service</title>
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
                    <div class="col-12 text-start">
                        <h4>Edit Service</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <form action={{"/updateService/".$catID."/".$id}} method="post" class="text-start">
                        @csrf
                        @method("put")
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
                        <input type="submit" value="Done" class="btn btn-primary mt-2 w-100">
                    </form>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <p>&copy; 2024 All rights reserved for Micheal Moris.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>