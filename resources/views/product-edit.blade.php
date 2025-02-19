<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}"></script>
    <title>Stock Gudang</title>
</head>

<body>
    <header>
        <x-sidebar></x-sidebar>
    </header>
    <section class="container d-flex justify-content-center align-items-center flex-column mt-5" style="width: 600px">
        <h1>edit Product
        </h1>
        <form action="{{ url('products/edit', $product['id']) }}" method="POST" enctype="multipart/form-data"
            style="width: 100%">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product['name'] }}"
                    placeholder="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="price"
                    value="{{ $product['price'] }}">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </section>
</body>

</html>
