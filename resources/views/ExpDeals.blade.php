
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The application |  Deals</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image"  src="welcom/img/logo.png"/><br><br>
                            <span class="block m-t-xs font-bold">Welcome ...</span>
                    </div>
                    <div class="logo-element">
                        <img alt="image"  src="img/logo.png" style="width: 70%"/>
                    </div>
                </li>
                <li >
                    <a href="{{ route('home')}}"><i class="fa fa-edit"></i> <span class="nav-label">Deals</span></a>
                </li>
                <li class="active">
                    <a href="{{route('Exp')}}"><i class="fa fa-id-card-o"></i> <span class="nav-label">Expired Deals</span></a>
                </li>
        </div>
    </nav>
        </div>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>
                </div>
                
        <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="ibox ">
                    <div class="ibox-title">  
                        <h5 class="d-flex justify-content-center">Need To Deals</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                        <small>Total views</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox ">
                    <div class="ibox-title">  
                        <h5 class="d-flex justify-content-center">Need To Deals</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                        <small>Total views</small>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="statistic-box">
                <h4>
                    Project Beta progress
                </h4>
                <p>
                    You have two project with not compleated task.
                </p>

                </div>
            </div>
        </div>
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row row-sm">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="example2">
                                    <thead>

                                    <tr>
                                        <th class="wd-15p border-bottom-0">Name</th>
                                        <th class="wd-15p border-bottom-0">Email</th>
                                        <th class="wd-20p border-bottom-0">Matricule</th>
                                        <th class="wd-20p border-bottom-0">Last Date</th>
                                        <th class="wd-20p border-bottom-0">State</th>
                                        <th class="wd-20p border-bottom-0">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deals as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->Matricule}}</td>
                                            <td>{{$item->Last_date}}</td>
                                            <td class="client-status"><span class="label label-danger">Expired</span></td>         
                                            
                                            <td>
                                                <a class="label bg-info" href="{{route('Delete',['deals' => $item->id])}}">Delete</a>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- bd -->
                    </div><!-- bd -->
                </div>
                <!--/div-->
           
            <!-- /row -->

        </div>
    </div>
    </div>

        </div>
            <div class="footer" style="text-align: center"><strong>&copy; <script>document.write(new Date().getFullYear())</script> Univers CRM</strong><br/> PFR de la Promotion 2021 du référentiel développement web | ZikoDev Safi.
            </div>        
        </div>

 
</body>
</html>



