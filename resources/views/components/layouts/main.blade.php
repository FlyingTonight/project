<!DOCTYPE html>
    <html lang="en">
       <head>
          <!-- basic -->
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <!-- mobile metas -->
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="viewport" content="initial-scale=1, maximum-scale=1">
          <!-- site metas -->
          <title>Endyy's Hosting Website</title>
          <meta name="keywords" content="">
          <meta name="description" content="">
          <meta name="author" content="">
          <!-- bootstrap css -->
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <!-- style css -->
          <link rel="stylesheet" href="css/style.css">
          <!-- Responsive-->
          <link rel="stylesheet" href="css/responsive.css">
          <!-- fevicon -->
          <link rel="icon" href="images/fevicon.png" type="image/gif" />
          <!-- Tweaks for older IEs-->
          <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
       </head>
       <!-- body -->
       <body class="main-layout">
          <!-- loader  -->

          <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#"/></div>
          </div>
          <!-- end loader -->
          <!-- header -->
          <div class="header">
             <div class="container">
                <div class="row d_flex">
                   <div class=" col-md-2 col-sm-3 col logo_section">
                      <div class="full">
                         <div class="center-desk">
                            <div class="logo">
                               <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-8 col-sm-12">
                      <nav class="navigation navbar navbar-expand-md navbar-dark ">
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                  <a class="nav-link" href="/">Home</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link" href="/about">About</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link" href="/hosting">Hosting</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link" href="/domain">Domain</a>
                               </li>
                               <li class="nav-item">
                                <a class="nav-link" href="/Projects">Projects</a>
                             </li>

                               <li class="nav-item">
                                  <a class="nav-link" href="/contact">Contact Us</a>
                               </li>
                            </ul>
                         </div>
                      </nav>
                   </div>
                   <div class="col-md-2  d_none">
                      <ul class="email text_align_right">
                        <li> {{-- <li><a href="Javascript:void(0)"> <i class="fa fa-shopping-bag" aria-hidden="true"> <span>0</span></i> --}}
                            </a>
                         </li>
                         <li>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                            </a>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <!-- end header inner -->
          <!-- top -->
      <div class="full_bg">
        <div class="slider_main">
           <div class="container">
              <div class="row">
                 <div class="col-md-12">


         {{$slot}}




 <!--  footer -->
 <footer>
    <div class="footer">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="infoma text_align_left">
                   <h3>Choose.</h3>
                   <ul class="commodo">
                      <li>Commodo</li>
                      <li>consequat. Duis a</li>
                      <li>ute irure dolor</li>
                      <li>in reprehenderit </li>
                      <li>in voluptate </li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="infoma">
                   <h3>Get Support.</h3>
                   <ul class="conta">
                      <li><i class="fa fa-map-marker" aria-hidden="true"></i>Address : Andijan IT texnikum
                      </li>
                      <li><i class="fa fa-phone" aria-hidden="true"></i>Call : +988903829299</li>
                      <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> Email : Endy@gmail.com</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="infoma">
                   <h3>Company.</h3>
                   <ul class="menu_footer">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About </a></li>
                      <li><a href="domain.html">Domain</a></li>
                      <li><a href="hosting.html">Hosting</a></li>
                      <li><a href="contact.html">Contact</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="infoma text_align_left">
                   <h3>Services.</h3>
                   <ul class="commodo">
                      <li>Commodo</li>
                      <li>consequat. Duis a</li>
                      <li>ute irure dolor</li>
                      <li>in reprehenderit </li>
                      <li>in voluptate </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <div class="copyright">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <p>© 2022 All Rights Reserved. <a href="#"> DIF 120/21</a></p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!-- end footer -->
 <!-- Javascript files-->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <!-- sidebar -->
 <script src="js/custom.js"></script>
</body>
</html>

