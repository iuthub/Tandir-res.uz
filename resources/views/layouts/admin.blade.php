<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/yourcode.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">HOME</a>
        </div>
        <!-- /.navbar-header -->











        <ul class="nav navbar-nav navbar-right" style="margin-right: 14px;">
            @if(auth()->guest())
                @if(!Request::is('auth/login'))
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                @endif
            @if(!Request::is('auth/register'))
                <li><a href="{{ url('/auth/register') }}">Register</a></li>
            @endif
            @else


            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>



            @endif
        </ul>





        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
{{--
                    <li>
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-bar-chart fa-fw"></i> Dashboard</a>
                    </li> --}}

                    <li>
                        <a href="{{ route('users.create') }}"><i class="fa fa-user-plus fa-fw"></i> Create Staff</a>
                    </li>


                    {{-- <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level"> --}}

                            <li>
                                <a href="{{ route('users.index') }}"><i class="fa fa-users fa-fw"></i> Staff</a>
                            </li>


{{--
                        </ul>
                        <!-- /.nav-second-level -->
                    </li> --}}

                    <li>
                        <a href="{{ route('orders.index') }}"><i class="fa fa-table fa-fw"></i> Orders</a>
                    </li>

                    <li>
                        <a href="{{ route('meal_orders.index') }}"><i class="fa fa-table fa-fw"></i> Meal Orders</a>
                    </li>



                        <!-- /.nav-second-level -->
                    </li>

                    {{-- <li>
                        <a href="#"><i class="fas fa-utensils fa-fw"></i> Meals<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level"> --}}
                            <li>
                                <a href="{{ route('meals.create') }}"><i class="fas fa-utensils fa-fw"></i> Create New Meal</a>
                            </li>

                            <li>
                                <a href="{{ route('meals.index') }}"><i class="fa fa-table fa-fw"></i> Meal Menu</a>
                            </li>


                        {{-- </ul>
                        <!-- /.nav-second-level -->
                    </li> --}}



                </ul>

            </div>

        </div>

    </div>


    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">


                    @yield('content')
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>

@yield('scripts')

{{-- @yield('footer') --}}





</body>

</html>
