<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booked</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard/simple-sidebar.css" rel="stylesheet">
<!-- profile -->
    <link href="/css/dashboard/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/css/dashboard/bootstrap.min.js"></script>
    <script src="/css/dashboard/jquery.min.js"></script>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">NPM Hotel</div>
            <div class="list-group list-group-flush">
                <a href="/dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="/room" class="list-group-item list-group-item-action bg-light">Room</a>
                <a href="/banquet" class="list-group-item list-group-item-action bg-light">Banquet</a>
                
                <a href="/profile" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="/hmsg" class="list-group-item list-group-item-action bg-light">Message</a>
                <a href="/booked" class="list-group-item list-group-item-action bg-light">Booked</a>
                
                <a href="/logout" class="list-group-item list-group-item-action bg-light">Logout</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

        <div class="row ml-5">
                    @foreach($books as $book)
                      <div class="card" style="width: 18rem;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        
                        <div class="card-body">
                          <h5 class="card-title">{{$book->rname}}</h5>
                          <p class="card-text">{{$book->rdescription}}</p>
                          <p class="card-text">{{$book->rprice}}$</p>
                          
                        </div>
                       
                      </div>
                      @endforeach
                </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
