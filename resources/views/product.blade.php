<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}"></script>
    <title>Stock-gudang</title>

</head>

<body>
    <header>
        <x-sidebar></x-sidebar>
    </header>
    <main>
        <section class="container mb-5 text-center">
            <h2 class="text-center my-5">Products List</h2>
            <a href="{{ url('products/create') }}" class="btn btn-primary mb-4"> Create Product</a>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
            @if (count($products) == 0)
                <h2 class="text-center">No products found.</h2>
            @else
                <section class="overflow-scroll container row row-cols-auto gap-4 d-flex justify-content-center"
                    style="width: 100%; height: 500px; p-4">

                    {{-- start card product --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name Produk</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td>
                                        <p class="text-decoration-none text-black">
                                            {{ $product['name'] }}
                                        </p>


                                    </td>
                                    <td>
                                        {{ $product->purchases->sum('quantity') }}
                                    </td>
                                    <td>
                                        {{ $product['price'] }}
                                    </td>
                                    <td>
                                        <a href="{{ url('products/edit', $product['id']) }}" class="btn btn-primary">
                                            Edit</a>
                                        <form action="{{ url('products/destroy', $product['id']) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus {{ $product['name'] }}? ')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- end card product --}}
            @endif
        </section>
        </section>
    </main>
</body>

</html>
