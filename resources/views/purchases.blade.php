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
    <x-sidebar>
    </x-sidebar>
    <main>
        <main>
            <section class="container mb-5 text-center">
                <h2 class="text-center my-5">{{ $title }} List</h2>
                <a href="{{ url('purchases/create') }}" class="btn btn-primary mb-4"> Create {{ $title }}</a>
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
                @if (count($purchases) == 0)
                    <h2 class="text-center">No {{ $title }} found.</h2>
                @else
                    <section class="overflow-scroll container row row-cols-auto gap-4 d-flex justify-content-center"
                        style="width: 100%; height: 500px; p-4">

                        {{-- start card product --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name Product</th>
                                    <th scope="col">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $purcahase)
                                    <tr>
                                        <th scope="row">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td>
                                            <p class="text-decoration-none text-black">
                                                {{ $products[$purcahase['product_id'] - 1]['name'] }}
                                            </p>


                                        </td>
                                        <td>
                                            {{ $purcahase['quantity'] }}
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
    </main>
</body>

</html>
