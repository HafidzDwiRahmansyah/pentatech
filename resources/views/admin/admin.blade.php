@extends('template.interface')

@section('title', 'Admin')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow rounded-2 my-5">
                    <div class="card-body">
                        <h3 class="text-center py-3">Form Artikel</h3>
                        <form action="" method="post">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <label class="form-label" for="username">Username</label>
                                    <input class="form-control" name="username" id="username" type="text" required>
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" name="name" id="name" type="text" required>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" name="email" id="email" type="email" required>
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-control" name="password" id="password" type="password" required>
                                </div>
                                <button class="btn btn-primary-dark mx-auto d-block w-50 my-3" type="submit">Simpan
                                    Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card border-0 shadow rounded-2 my-3">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['username'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['password'] }}</td>
                                    <td>
                                        <button class="btn btn-warning">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection