<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard/simple-sidebar.css" rel="stylesheet">
    <link href="/css/banquet/style.css" rel="stylesheet">
<!-- profile -->
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
          <section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-8 col-xl-6">
        <div class="row">
        @if (count($errors) > 0)
        
        @foreach ($errors->all() as $error)

        <div class="alert alert-danger">
        {{$error}}
        </div>
                
        @endforeach
        @endif
          <div class="col text-center">
            <h1>Banquete Information</h1>
            <p class="text-h3">Provide with proper details</p>
          </div>
        </div>
          <form method="POST" action="banquet/{{$banquet->bid}}" class="register-form" id="register-form">
          <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="row align-items-center">
          <div class="col-lg-6">
          </div>
          <div class="col mt-4">
            <input type="text" class="form-control" value="{{$banquet->bname}}" name="bname"  id="bname">
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col">
            <input type="text" class="form-control" value="{{$banquet->bprice}}" name="bprice" id="bprice">
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col-md-12">
              <div class="form-group form-group-textarea mb-md-0">
                  <input class="form-control" value="{{$banquet->bdescription}} *" required="required" data-validation-required-message="Please enter room details" name="bdescription" id="rdescription"></textarea>
                  <p class="help-block text-danger"></p>
              </div>
          </div>
        </div>
        <div class="row justify-content-start mt-4">
          <div class="col">

              <input type="submit" name="save" id="save" class="btn btn-primary mt-4" value="SAVE"/>

          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
