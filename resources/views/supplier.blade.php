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

    <main>
        <section>
            <div class="container d-flex justify-content-center align-items-center flex-column mt-5" style="width: 600px">
                <div class="d-flex justify-content-center flex-column align-items-center gap-2">
                    <h1>Suppliers List</h1>
                    <a href="{{ url('supplier/create') }}" class="btn btn-primary my-4">Create Supplier</a>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('update'))
                        <div class="alert alert-success">
                            {{ session('update') }}
                        </div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                    @endif
                </div>
                @if (count($suppliers) == 0)
                    <h2 class="text-center">No Supplier found.</h2>
                @else
                    <section class="overflow-scroll  row row-cols-auto gap-4" style="width: 900px;height:500px">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <th scope="row">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td>
                                            <a href="{{ url('supplier/show', $supplier['id']) }}"
                                                class="text-decoration-none text-black">
                                                {{ $supplier['name'] }}

                                            </a>
                                        </td>
                                        <td>
                                            0{{ $supplier['contact'] }}
                                        </td>
                                        <td>
                                            {{ $supplier['address'] }}
                                        </td>
                                        <td>
                                            <a href="{{ url('supplier/edit', $supplier['id']) }}"
                                                class="btn btn-primary">
                                                Edit</a>
                                            <form action="{{ url('supplier/destroy', $supplier['id']) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Yakin ingin menghapus {{ $supplier['name'] }}? ')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                @endif
        </section>
        </div>
        </section>
    </main>
</body>

</html>
