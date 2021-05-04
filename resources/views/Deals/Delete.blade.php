<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe CRM |  Deals</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Morris -->
    <link href="/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
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
            </li>
            <li>
             <a href="{{ route('home')}}"><i class="fa fa-edit"></i> <span class="nav-label">Deals</span></a>
         </li>
         <li>
             <a href="{{route('Exp')}}"><i class="fa fa-id-card-o"></i> <span class="nav-label">Expired Deals</span></a>
         </li>
                
                
                

        </div>
    </nav>

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
                    <ul class="nav navbar-top-links navbar-right">
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

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                        </li>
                    @endguest
                    </ul>
                </nav>
                </div>

    <div class="wrapper wrapper-content">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
              
                <form method="POST" id="form" class="fm-inline"
                    action="{{ route('delete', ['deals' => $deals]) }}">
                    @csrf
                    @method('DELETE')

                    @include('Post.delete')
                   
                </form>
            </div>
        </div>
    </div>
        

  
        
        
        </div>
            <div class="footer" style="text-align: center"><strong>&copy; <script>document.write(new Date().getFullYear())</script> Univers CRM</strong><br/> PFR de la Promotion 2019 du référentiel développement web | YouCode Safi.
            </div>        
        </div>

    <!-- Mainly scripts -->



</body>
</html>