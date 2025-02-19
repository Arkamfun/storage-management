<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}"></script>
    <title>stock-gudang</title>
</head>

<body>
    <header>
        <x-sidebar></x-sidebar>
    </header>
    <main class="container d-flex flex-column justify-content-center align-items-center">
        <h1>Create Product</h1>

        <div>

            <form action="{{ url('/products/create') }}" method="POST" enctype="multipart/form-data"
                style="width: 500px">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price">
                </div>
                <button class="btn btn-primary" type="submit">Submit Product</button>
            </form>
        </div>
    </main>
</body>

</html>
