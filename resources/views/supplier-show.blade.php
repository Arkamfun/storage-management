<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}"></script>
    <title>Stock-Barang</title>
</head>

<body>
    <header>
        <x-sidebar></x-sidebar>
    </header>
    <main class="container mt-5">

        <h2 class="text-center">Transaction History from {{ $supplier['name'] }}</h2>
        <section class="overflow-scroll container row row-cols-auto gap-4" style="width: 100%; height: 500px p-4">
            {{-- start card product --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name Produk</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $purchase)
                        <tr>
                            <th scope="row">
                                {{ $loop->iteration }}
                            </th>
                            <td>
                                <a href="{{ url('show', $purchase['id']) }}" class="text-decoration-none text-black">
                                    {{ $purchase->products['name'] }}

                                </a>
                            </td>
                            <td>
                                {{ $purchase['quantity'] }}
                            </td>
                            <td>
                                {{ $purchase['contact'] }}
                            </td>
                            <td>
                                {{ date('d F Y', strtotime($purchase['created_at'])) }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
