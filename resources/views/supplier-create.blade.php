<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}"></script>
    <title>Stock-Gudang</title>
</head>

<body>
    <header>
        <x-sidebar></x-sidebar>
    </header>
    <main>
        <section class="container">
            <div class= "d-flex flex-column justify-content-center align-items-center">
                <h1>
                    Create Supplier
                </h1>
                <form action="{{ url('supplier/create') }}" method="POST" enctype="multipart/form-data"
                    style="width: 500px">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">contact</label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="contact">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="address">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit Supplier</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
