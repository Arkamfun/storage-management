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
    <header class="">
        <x-sidebar></x-sidebar>
    </header>
    <main class="container mt-5">
        <section class="d-flex justify-content-center gap-2 mb-5">
            <div class=" bg-slate shadow-sm text-start  rounded-4 pt-4 d-flex flex-column justify-items-start align-items-start p-4"
                style="width: 300px; height: auto">
                <h5 class="text-primary">
                    total products
                </h5>
                <h2 class="text-primary">
                    {{ count($products) }}
                </h2>
            </div>
            <div class="bg-slate shadow-sm  text-start  rounded-4 pt-4 d-flex flex-column justify-items-start align-items-start p-4"
                style="width: 300px; height: auto"">
                <h5 class="text-success">
                    total stocks
                </h5>
                <h2 class="text-success">
                    {{ $totalStock }}
                </h2>
            </div>
            <div class="bg-slate shadow-sm  text-start  rounded-4 pt-4 d-flex flex-column justify-items-start align-items-start p-4"
                style="width: 300px; height: auto"">
                <h5 class="text-danger">
                    total Purchases
                </h5>
                <h2 class="text-danger">
                    {{ count($purchases) }}
                </h2>
            </div>
            <div class=" bg-slate shadow-sm  text-start  rounded-4 pt-4 d-flex flex-column justify-items-start align-items-start p-4"
                style="width: 300px; height: auto"">
                <h5 class="text-info">
                    total transactions
                </h5>
                <h2 class="text-info">
                    {{ count($transactions) }}
                </h2>
            </div>
            <div class="bg-slate shadow-sm  text-start  rounded-4 pt-4 d-flex flex-column justify-items-start align-items-start p-4"
                style="width: 300px; height: auto"">
                <h5 class="">
                    total Suppliers
                </h5>
                <h2 class="">
                    {{ count($suppliers) }}
                </h2>
            </div>
        </section>
    </main>
</body>

</html>
