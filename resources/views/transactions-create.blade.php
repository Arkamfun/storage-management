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
    <main class="container d-flex flex-column justify-content-center align-items-center">
        <h1>Create Transaction</h1>

        <div>
            <form action="{{ url('transactions/create') }}" method="POST" enctype="multipart/form-data"
                style="width: 500px">
                @csrf
                <div class="mb-3">
                    <label for="customerName" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="customerName" name="name"
                        placeholder="customer name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="customer email">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone"
                        placeholder="customer phone">
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="Address" name="address" placeholder="Address">
                </div>
                <div class="mb-3">
                    <label for="Quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="Quantity" name="quantity" placeholder="quantity">
                </div>
                <div class="mb-3">
                    <select class="form-select form-select-md mb-3" aria-label="Large select example"
                        name="transaction_type">
                        <option selected>select your transaction type</option>
                        <option value="in">In</option>
                        <option value="out">Out</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select form-select-md mb-3" aria-label="Large select example" name="product_id">
                        <option selected>Select your Product</option>
                        @foreach ($products as $product)
                            <option value={{ $product['id'] }}>{{ $product['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit Product</button>
            </form>
        </div>
    </main>
</body>

</html>
