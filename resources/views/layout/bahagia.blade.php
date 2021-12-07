<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script
            src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
        </script>

</head>

<style>

    body {
        background-color: #c8d8e4;
    }

    .jumbotron {
        padding-top: 5px;
        padding-bottom: 5px;
        margin-bottom:0;
        background-color: #2b6777;
    }

    h4,h5 {
        color: #fff;
    }

    .row .content {
        height : auto;
    }
    .sidenav {
      margin-top: 22px;
      margin-left: 0;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    /* On small screens, height is set to 'auto' for the grid */
    @media screen and (max-width: 800px) {
      .row.content {height: auto;}
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #2b6777;
    }

  </style>

<body>
    <!-- Header -->
   <header>
    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://sipmaba.its.ac.id/uploads/foto/120382030299.jpeg" class="center-block" width="70">
                </div>
                <div class="col-md-10 order-1 align-center">
                        <br>
                        <h4> Hosiana Arga Putri </h4>
                        <h4> 5026201135
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- Collapsed Navbar -->
    <nav class="navbar navbar-inverse visible-xs">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li> <a href="/pegawai"> Pegawai </a></li>
            <li><a href="/absen"> Absen </a></li>
            <li> <a href="#"> Praktikum </a> </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row content">
            <!-- Side Navbar -->
            <div class="col-sm-2 sidenav hidden-xs ">
                <br>
                @yield('side-navbar')
                <br>
            </div>
                <br>

            <!-- Konten Utama -->
            <div class="col-sm-10">
                <div class="well"> <h3> @yield('judulbagian') </h3>
                    <hr style="border:solid 0.5px black">
                    <br>
                    @yield('konten')
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <h5 class="text-center"> Hak Cipta oleh 5026201135 - Hosiana Arga Putri </h5>
        </div>
    </footer>


    @show

</body>
</html>
