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

<body class="container " style="margin-top: 10rem">

    <section class="d-flex flex-column justify-content-center align-items-center">
        <h1>Storage Management</h1>
        <h2>Register</h2>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ url('register') }}" method="POST" enctype="multipart/form-data" style="width: 30rem;">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-floating mb-5">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    name="role">
                    <option selected>Role</option>
                    <option value="admin">Admin</option>
                    <option value="cashier">Cashier</option>
                </select>
                <label for="floatingSelect">Select The Role:</label>
            </div>
            <button type="submit" class="btn btn-primary mx-auto" style="width: 100%">Submit</button>
        </form>
    </section>
</body>

</html>
