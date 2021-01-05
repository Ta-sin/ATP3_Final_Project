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
<!-- profile -->
    <link href="/css/dashboardprofile/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/css/dashboardprofile/bootstrap.min.js"></script>

    <script src="/css/dashboardprofile/jquery.min.js"></script>

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

            <div class="container-fluid">
                <h1 class="mt-4">Profile</h1>
                <p>Update your profile</p>
                <div class="container" style="padding-top: 60px;">
                    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="row">
                            <!-- left column -->
                            <div class="col-lg-6">
                                <div class="text-center">

                                    <img src="{{$user->dp}}" name="dp" class="avatar img-circle img-thumbnail" alt="avatar">
                                    <h6>Upload a different photo...</h6>

                                    <input type="file" name="dp" class="text-center center-block well well-sm">
                                </div>
                            </div>
                            <!-- edit form column -->
                            <div class="col-lg-6 personal-info">

                                <h3>Personal info</h3>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Full Name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="name" value="{{$user->name}}" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="email" value="{{$user->email}}" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="password" value="{{$user->password}}" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Type:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="type" value="{{$user->type}}" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Status:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="status" value="{{$user->status}}" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" value="Save Changes" type="submit">
                                        <a >
                                          <a href="/logout" class="btn btn-danger">Log out</a>
                                    </div>
                                </div>
                </div>



                            </div>
                        </div>
                    </form>
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
