@extends('template.interface')

@section('title', 'Artikel')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h3 class="text-center py-3">Form Artikel</h3>
                        <form action="/add_artikel" method="post">
                            @csrf
                            <label class="form-label" for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" required><br>
                            <label class="form-label" for="writer">Penulis</label>
                            <input class="form-control" type="text" name="writer" id="writer" required><br>
                            <label class="form-label" for="artikel">Artikel</label>
                            <textarea class="form-control" name="artikel" id="summernote" cols="30"
                                rows="10"></textarea><br>
                            <button class="btn btn-primary-dark mx-auto d-block w-50 my-3" type="submit">Simpan
                                Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection