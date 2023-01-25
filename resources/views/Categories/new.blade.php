<!DOCTYPE html>
<html lang="en">

<head>
    <title>Categories</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('Css/style.css')}}">
</head>

<body>

    <div class="container ">
        <h2 class="homeheading"> New Product </h2>
        <div class="row">
            <div class="col-sm-4">
                <form method="POST" action="/category-store">
                    @csrf
                    <label>Product</label>
                    <input type="text" name="title" class="form-control" />
                    <label>Quantity</label>
                    <input type="text" name="quantity" class="form-control" />
                    <br><br>
                    <button class="btn btn-info " type="submit">Create</button>
                </form>
            </div>
        </div>


    </div>

</body>

</html>