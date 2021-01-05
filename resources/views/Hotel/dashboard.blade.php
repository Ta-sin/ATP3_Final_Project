<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/css/dashboard/style.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="/css/dashboard/simple-sidebar.css" rel="stylesheet">

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

          <h1>Room Info</h1>

          <div class="container mt-5">
     <div class="card-group vgr-cards">

        @foreach($rooms as $room)
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">{{$room->rname}}</h4>
              <p class="card-text">{{$room->rdescription}}</p>
              <p class="card-text">{{$room->rprice}}</p>
              <a href="/room/{{$room->rid}}" class="btn btn-outline-primary">Details</a>
              <a href="/roombook/{{$room->rid}}" class="btn btn-outline-primary">Book</a>

          </div>
      </div>
      
      @endforeach

 </div>
        </div>


        <div id="page-content-wrapper">
          <h1>Banquete Info</h1>

          <div class="container mt-5">
          @foreach($banquets as $banquet)
     <div class="card-group vgr-cards">

           <div class="card">
               <div class="card-body">
                   <h4 class="card-title">{{$banquet->bname}}</h4>
                    <p class="card-text">{{$banquet->bdescription}}</p>
                   <a href="/banquet/{{$banquet->bid}}" class="btn btn-outline-primary">Details</a>
                   <a href="/banquetbook/{{$banquet->bid}}" class="btn btn-outline-primary">Details</a>

               </div>
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
