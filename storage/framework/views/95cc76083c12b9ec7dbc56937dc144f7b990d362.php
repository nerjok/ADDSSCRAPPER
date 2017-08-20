<nav class="navigation">
            <div class="container">
  <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="sf-menu">
                      <?php if(Auth::check()): ?>
                        <?php if(auth()->user()->is_admin): ?>


                                <li><a href="baltic">ldb.lt news</a></li>
                                <li><a href="kaliningrad/ka">Kaliningrad</a></li>
                                <li><a href="economic">Ekonomika</a></li>
                                <li><a href="test">Scraping</a></li>
                                        

                       
                        <li><a href="subscribe">Emailing</a></li>
                        <li><a href="emails">emails</a></li>
                        <?php endif; ?>
                       
                        <li><a href="mySubs"><?php echo e(__('MySubs')); ?></a></li>
                        <?php endif; ?>
                        <li><a href="/"><?php echo e(__('Home')); ?></a></li>
                        <li><a href="skelbimu-prenumeravimas"><?php echo e(__('Subscribe')); ?></a></li>
                        <li><a href="/#about"><?php echo e(__('Usage')); ?></a></li>
                        <li><a href="/#C4"><?php echo e(__('About')); ?></a></li>
                        <li><a href="baltic"><?php echo e(__('News')); ?></a></li>
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                            <li><a href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                               
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
                   </div>
     </div> 
    </div> 
        </nav>