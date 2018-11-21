<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </li>
                
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle square_btn" data-toggle="dropdown">Surat Ketarangan Nikah<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="/formulir/sknikah">Form Calon Suami</a></li>
                          <li><a href="/formulir/sknikahistri">Form Calon Istri</a></li>
    
                        </ul>
                </li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle square_btn" data-toggle="dropdown">Surat Ketarangan Orang Tua<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="/formulir/skorangtua">Form Orang Tua Suami</a></li>
                          <li><a href="/formulir/skorangtuaistri">Form Orang Tua Istri</a></li>
    
                        </ul>
                </li>
                <li id="tombol">
                        <a class="square_btn" href="/formulir/spkehendaknikah">S.P. Kehendak Nikah</a>
                    </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        // $("#tombol").click(function () {
        //     $("#tombol").addClass('button-clicked');
        // });

    </script>

</body>

</html>