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
        <h1>Create Purchases</h1>

        <div>

            <form action="{{ url('/purchases/create') }}" method="POST" enctype="multipart/form-data"
                style="width: 500px">
                @csrf
                <div class="form-floating my-4">
                    <select class="form-select" id="product" name="product_id">
                        <option selected>Pilih Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
                        @endforeach
                    </select>
                    <label for="product">Pilih Product</label>
                </div>
                <div class="form-floating my-4">
                    <select class="form-select" id="product" name="supplier_id">
                        <option selected>Pilih Supplier</option>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier['id'] }}">{{ $supplier['name'] }}</option>
                        @endforeach
                    </select>
                    <label for="product">Pilih Product</label>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="number" class="form-control" id="contact" name="contact" placeholder="contact">
                </div>
                <button class="btn btn-primary" type="submit">Submit Product</button>
            </form>
        </div>
    </main>
</body>

</html>
