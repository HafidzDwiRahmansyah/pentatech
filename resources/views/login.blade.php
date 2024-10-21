<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN | PENTATECH.ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card my-center-card border-0 shadow rounded-2">
                        <div class="card-body">
                            <h4 class="text-center py-3"><b>PAGE LOGIN</b></h4>
                            <form action="" method="post">
                                @csrf
                                <label class="form-label fs-12" for="name">USERNAME</label>
                                <input class="form-control" name="name" id="name" type="text" required><br>
                                <label class="form-label fs-12" for="password">PASSWORD</label>
                                <input class="form-control" name="password" id="password" type="password" required><br>
                                <button class="btn btn-primary-dark mx-auto d-block w-50 fs-16"
                                    type="submit">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>