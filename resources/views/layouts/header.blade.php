 <header id="header" class="header d-flex align-items-center">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="/" class="logo d-flex align-items-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="assets/img/logo.png" alt=""> -->
             <h1>NewBurmaElectric<span>.</span></h1>
         </a>

         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
         <nav id="navbar" class="navbar">
             <ul>
                 <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
                 </li>
                 <li><a href="{{ route('product') }}"
                         class="{{ request()->routeIs('product') ? 'active' : '' }}">Products</a></li>
                 <li><a href="{{ route('contact') }}"
                         class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

                 {{-- <li><a href="services.html">Services</a></li> --}}
                 {{-- <li><a href="blog.html">Blog</a></li> --}}
             </ul>
         </nav><!-- .navbar -->

     </div>
 </header>
