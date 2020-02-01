<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        table {
            border-collapse: collapse;
            border-radius: 1em;
            overflow: hidden;
        }


        .ee {
            background-color: lightslategray;
            color: black !important;
        }

        .ee:focus {
            border: 3px solid #555;
            color: lightslategray;
        }

        .ee::placeholder {
            /* Most modern browsers support this now. */
            color: white;
        }
    </style>

    <title>Arkademy Tes Bootchamp!</title>
</head>

<body class="">

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-transparent shadow mb-5">
        <a class="navbar-brand">
            <img src="{{asset('images')}}/logoArkademy.png" width="120" alt="">
        </a>
        <div class="search-bar">
            <form class="form-inline">
                <input class="form-control mr-sm-2 text-white ee" style="width: 820px;" type="text" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 d-none" type="submit">Search</button>
            </form>
        </div>
        <div class="button-add ml-5">
            <button data-toggle="modal" data-target="#modal-add"
                class="text-white btn btn-warning ml-5 py-2 btn-lg px-4 shadow">Add</button>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto mt-5">
                <table class="table table-borderless shadow">
                    <thead style="background-color: orange; color: white;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Cashier</th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$d->getCashier->name}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->getCategory->name}}</td>
                            <td>{{$d->price}}</td>
                            <td>
                                <a id="tombol" href="" class="text-danger mr-3"><i class="fas fa-trash"></i></a>
                                <a data-toggle="modal" data-target="#modal-edit" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Akhir Content -->


    <!-- Modal Add -->
    <div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <select class="form-control" name="id_cashier" id="exampleFormControlSelect1">
                                @foreach ($cashier as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="id_category" id="exampleFormControlSelect1">
                                @foreach ($category as $item) 
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="Price">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning text-white">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Muhammad Bagas Fadillah</option>
                            <option>Anis Dwi Zuliani</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Food</option>
                            <option>Drink</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning text-white">EDIT</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://kit.fontawesome.com/b4e0bb4f2f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>