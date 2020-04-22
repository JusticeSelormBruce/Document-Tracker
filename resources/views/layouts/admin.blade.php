<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{asset('images/logo-round.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo-round.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Admin - Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
          rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
          rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('paper-dashboard/css/paper-dashboard.min.css')}}"
          rel="stylesheet"/>
    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <style>
        img {
            width: 30px;
            height: 30px;
        }

        body, html {
            font-family: -apple-system;
            font-size: small !important;
        }

        .img1 {
            width: 100px;
            height: 100px;
        }

        .s {
            width: 205px !important;
        }

        li {
            list-style: none !important;
        }

        hr {
            margin: 0.3rem;
            background-color: white;
            margin-left: 50px!important;
        }

    </style>
</head>
<body>
<div class="wrapper  bg-light">
    <div class="sidebar" data-color="dark" data-active-color="danger">
        <div class="logo">
            <a href="#" class="simple-text">

        <span class="mx-5"> <img src="{{asset('icons/logo-round.png')}}" alt="Profile" class="img1 rounded"></span>

            </a>

        </div>


        <div class="sidebar-wrapper s">
            <ul class="nav">
                <li style="list-style-type: circle!important;">
                    <div class="form-inline mx-5">
                        <span></span><img src="{{asset('icons/dot.PNG')}}" alt=""
                                          style="border-radius: 100px!important; width: 20px!important; height: 20px!important;">
                        <span class="mx-2"></span><a href="/dashboard"
                                                     style="color: white!important; text-decoration: none!important;">Dashboard</a>
                    </div>

                </li>
                <hr>
                @if($links == null)

                @else
                    @foreach($links as $list)


                            <li style="list-style-type: circle!important;">
                                <div class="form-inline mx-5">
                                    <span></span><img src="{{asset('icons/dot.PNG')}}" alt=""
                                                      style="border-radius: 100px!important; width: 20px!important; height: 20px!important;">
                                    <span class="mx-2"></span><a href="{{$list->route}}"
                                                                 style="color: white!important; text-decoration: none!important;">{{$list->name}}</a>
                                </div>

                            </li>
                            <hr>

                    @endforeach
                @endif

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent shadow-lg">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <div class="mx-5 h5">Document Monitoring System (Koforidua Technical  University)</div>
                </div>
                <ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle  text-success" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
        <main class=" pt-2 mt-5">
            @yield('render')
        </main>
    </div>
</div>


<script src="{{asset('paper-dashboard/js/jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('boostrap/js/bootstrap.js')}}"></script>
<script src="{{asset('boostrap/js/jquery.js')}}"></script>
<script src="{{asset('paper-dashboard/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/chartjs.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('paper-dashboard/js/paper-dashboard.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#table_id1').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#table_id11').DataTable();
    });
</script>
<script>
    $('.alert').alert()
</script>
<script>
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    var hours = today.getHours(); // => 9
    var minutes = today.getMinutes(); // =>  30
    var seconds = today.getSeconds(); // => 51

    todayDate = mm + '/' + dd + '/' + yyyy;

    todayTime = hours + ':' + minutes + ':' + seconds;
    document.getElementById('date').setAttribute('value', todayDate);
</script>
</body>
</html>
