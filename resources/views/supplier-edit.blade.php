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
        <h1>edit Supplier
        </h1>
        <form action="{{ url('supplier/edit/' . $supplier['id']) }}" method="POST" enctype="multipart/form-data"
            style="width: 100%">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $supplier['name'] }}"
                    placeholder="name">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="number" class="form-control" id="contact" name="contact" placeholder="contact"
                    value="{{ $supplier['contact'] }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address"
                    value="{{ $supplier['address'] }}">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </section>
</body>

</html>
