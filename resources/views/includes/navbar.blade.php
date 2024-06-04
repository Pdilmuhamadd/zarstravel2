    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar-expand-lg navbar-light bg-white">
            <a href="{{url('/')}}" class="navbar-brand">
                <img src="{{url('frontend/images/logo.png')}}" alt="logo"/>
            </a>
            <button class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-targer="#navb"
            >
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="{{url('/')}}" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href=/#popular class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="/#testimoniContent" class="nav-link">Testimonial</a>
                    </li>
                </ul>

                @guest
                    <!-- Mobile Button -->
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
                            Sign In
                        </button>
                    </form>



                 <!-- Desktop Button -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-3 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
                            Sign In
                        </button>
                    </form>

                @endguest


                @auth
                    <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                 </form>

                 <!-- Desktop Button -->
                 <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
                    @csrf
                     <button class="btn btn-login btn-navbar-right my-3 my-sm-0 px-4" type="submit">
                         Logout
                     </button>
                  </form>
                @endauth
            </div>
        </nav>
    </div>
