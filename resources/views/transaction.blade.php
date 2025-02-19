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
        <section>
            <div class="container d-flex justify-content-center align-items-center flex-column mt-5" style="width: 600px">
                <div class="d-flex justify-content-center flex-column align-items-center gap-2 my-4">
                    <h1>Transactions</h1>
                    <a href="{{ url('transactions/create') }}" class="btn btn-primary">create Transaction</a>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-danger">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                @if (count($transactions) == 0)
                    <h2 class="text-center">No Transactions found.</h2>
                @else
                    <section class="overflow-scroll  row row-cols-auto gap-4" style="width: 900px;height:500px">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Transaction</th>
                                    <th scope="col">Type</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <th scope="row">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td>
                                            {{ $transaction->customers['name'] }}
                                        </td>
                                        <td>
                                            {{ $transaction->customers['email'] }}
                                        </td>
                                        <td>
                                            {{ $transaction->customers['address'] }}
                                        </td>
                                        <td>
                                            {{ $transaction->products['name'] }}
                                        </td>
                                        <td>
                                            {{ $transaction->quantity }}
                                        </td>
                                        @if ($transaction->transaction_type == 'sale')
                                            <td class="text-success fw-semibold">
                                                {{ $transaction['transaction_type'] }}
                                            </td>
                                        @else
                                            <td class="text-danger fw-semibold">
                                                {{ $transaction['transaction_type'] }}
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                @endif
            </div>
        </section>
    </main>
</body>

</html>
