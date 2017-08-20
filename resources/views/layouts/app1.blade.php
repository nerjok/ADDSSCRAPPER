<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <style>


p {font-size: 16px;}
.bg-1 { 
             background: url({{ asset('img/header.jpg') }}); /*url("img/header.jpg");*/
               background-size:cover;
              min-height:150px;

        color: #ffffff;
    }

  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .container-fluid {
    padding-top: 40px;
    padding-bottom: 40px;
}

.navbar {
    background:black;
    padding-top: 5px;
    padding-bottom: 5px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}

.navbar-nav li a:hover {
    color: #1abc9c !important;
}

.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}

.navbar-nav > li > a, .navbar-brand {
    padding-top:5px !important; 
    padding-bottom:0 !important; 
    height: 25px; } 
.navbar {min-height:25px !important;}



/* equal height*/
.row.equal-cols {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.row.equal-cols:before,
.row.equal-cols:after {
  display: block;
}

.row.equal-cols > [class*='col-'] {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
}

.row.equal-cols > [class*='col-'] > * {
  -webkit-flex: 1 1 auto;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto; 
}
  </style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      @if(Auth::check())
                        @if(auth()->user()->is_admin)
                              <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      News <span class="caret"></span>
    </a>
                            <ul class="dropdown-menu">

                                <li><a href="baltic">ldb.lt news</a></li>
                                <li><a href="kaliningrad/ka">Kaliningrad</a></li>
                                <li><a href="economic">Ekonomika</a></li>
                                <li><a href="test">Scraping</a></li>
                            </ul>
    </li>

                       
                        <li><a href="subscribe">Emailing</a></li>
                        <li><a href="emails">emails</a></li>
                        @endif
                       
                        <li><a href="mySubs">{{ __('MySubs') }}</a></li>
                        @endif
                        
                        <li><a href="skelbimu-prenumeravimas">{{ __('Subscribe')}}</a></li>
                        <li><a href="#about">{{ __('Usage') }}</a></li>
                        <li><a href="#C4">{{ __('About') }}</a></li>
                        <li><a href="baltic">ldb.lt naujienos</a></li>
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
  <div class="container-fluid bg-1 text-center">

  </div>
  <div class="container" style="min-height: 400px;">
        @yield('content')
        </div>
    </div>


                <div class="container-fluid bg-2 text-center" id="C4">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="aaa" style="width:60%;margin-left:20%; text-align: left;">
                            <h3>{{ __('About us') }}</h3>
                            <p> For those, who has attended our's site we wish to say welcome here. 
                                Basicly we came with idea to lightened and authomatize work searching process 
                                in order not to be obssed by clicking and overviewing webs</p>
                            <p>Furthemore it's published with individual purposes to aid self, as well as
                            exhibit project as one more portfolio item, hope this works. For better usage it's needed to register, confirm
                            email and later on subscribe for casual newsletters.
                            </p>
                            </div>
                            
                            </div>
                            <div class="col-md-6">
                                <div class="aaa" style="width:60%;margin-left:20%;">
                                <h3>{{ __('Want to contact us?') }}</h3>
                                                            <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{ __('Email') }}">
                                        </div>
                                            <div class="form-group">
                                            <input type="email" class="form-control" id="name" placeholder="{{ __('name')}}">
                                        </div>
                                        <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="{{ __('message')}}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-sm btn-block">{{ __('Submit') }}</button>
                                            </div>
                                        </form>
                                </div>
                                </div>
                    </div>

             
                </div>
                <div class="container-fluid bg-3 text-center" id="about">
                                <h3>{{ __('Usage instructions') }}</h3>
                        <div class="row">
                            <div class="col-xs-6 col-md-4">
                         <div class="aaa" style="width:60%;margin-left:20%;">
                                <h3>{{ __('Guest usage') }}</h3><ol>
                                <li>Search for the link to subscribe</li>
                                <li>Validate it with our site</li>
                                <li>Add email</li>
                                <li>Confirm email send to you mail</li>
                                <li>Enjoy</li>
                                <li>Well, guest are not allowed to use full system functionality</li></ol>
                            </div></div>
                            <div class="col-xs-6 col-md-4">
                            <div class="aaa" style="width:60%;margin-left:20%;">
                                <h3>{{ __('Authorized usage') }}</h3>
                                <ol>
                                <li>Register</li>
                                <li>Confirm email send to you mail</li>
                                <li>Search for the link to subscribe</li>
                                <li>Validate it with our site</li>
                                <li>Manage subscriptions</li>
                                <li>Enjoy</li>
                                </ol>
                       
                            </div></div>
                                                        <div class="col-xs-6 col-md-4">
                            <div class="aaa" style="width:60%;margin-left:20%;">
                                <h3>{{ __('Add portals') }}</h3>
                                <ol>
                                <li><a href="http://cvzona.lt/">cvzona.lt</a></li>
                                <li><a href="https://www.cvmarket.lt">cvmarket.lt</a></li>
                                <li><a href="http://www.cvkodas.lt/">cvkodas.lt</a></li>
                                 <li><a href="http://www.darbo.lt/">darbo.lt</a></li>
                                <li><a href="http://www.dirba.lt/">dirba.lt</a></li>
                                <li><a href="http://www.cvbankas.lt/">cvbankas</a></li>
                                <li><a href="http://www.cv.lt/">cv.lt/</a></li>
                    
                                
                                </ol>
                        
                            </div></div>
                        </div>

                </div>

<footer class="container-fluid bg-4 text-center">
        <p>The tool made 2017, design by bootstrap, all site damages is observed.</p> 
        </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
