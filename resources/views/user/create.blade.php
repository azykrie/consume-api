<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Concume API</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
</head>
<body style="background: purple">
	
    <div class="container mt-5 mb-5">
        <div class="row">
            @if (Session::has('message'))
                <div class="alert alert-danger">{!! session('message') !!}</div>
            @endif
            <div class="col-md-12">
                <div class="border-0 shadow rounded">
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">First Name</label>
                                    <input type="text" name="nama_depan" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                    <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (Session::has('success'))
            var msg = "{{ session('success') }}";
            Swal.fire(
                'Success!',
                msg,
                'success'
            )
        @endif
        @if (Session::has('error'))
            var msg = "{{ session('error') }}";
            Swal.fire(
                'Error!',
                msg,
                'error'
            )
        @endif
    </script>

</body>
</html>