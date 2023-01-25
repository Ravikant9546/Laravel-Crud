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
        <h2 class="homeheading">WareHouse Product Management System <a class="btn btn-info" href="/category-create">New Category</a></h2>

        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->Quantity}}</td>
                    <td>
                        <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
                        <!-- <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a> -->
                        <form method="POST" action="/category-delete/{{$category->id}}">
                            @csrf
                            @method('delete')
                               <button type="submit" class="btn btn-lg btn-danger"> Delete</button>

                        </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>