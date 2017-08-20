<nav class="navigation">
            <div class="container">
  <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="sf-menu">
                      @if(Auth::check())
                        @if(auth()->user()->is_admin)


                                <li><a href="baltic">ldb.lt news</a></li>
                                <li><a href="kaliningrad/ka">Kaliningrad</a></li>
                                <li><a href="economic">Ekonomika</a></li>
                                <li><a href="test">Scraping</a></li>
                                        

                       
                        <li><a href="subscribe">Emailing</a></li>
                        <li><a href="emails">emails</a></li>
                        @endif
                       
                        <li><a href="mySubs">{{ __('MySubs') }}</a></li>
                        @endif
                        <li><a href="/">{{ __('Home')}}</a></li>
                        <li><a href="skelbimu-prenumeravimas">{{ __('Subscribe')}}</a></li>
                        <li><a href="/#about">{{ __('Usage') }}</a></li>
                        <li><a href="/#C4">{{ __('About') }}</a></li>
                        <li><a href="baltic">{{ __('News') }}</a></li>
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                               
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
                   </div>
     </div> 
    </div> 
        </nav>