<header class="header header-sticky header-light {{$class??''}}">
    <nav class="navbar navbar-expand-lg yamm">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{route('products.index')}}">
                <img src="{{$logo??'/img/logo-dark.png'}}" class="img-fluid logo-dark" alt="">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown nav-item {{$areActiveRoutes(['products.index','products.show'])}}">
                        <a href="{{route('products.index')}}" class="nav-link">Каталог</a>
                    </li>
                    <li class="dropdown nav-item {{$areActiveRoutes(['blog.index','blog.show'])}}">
                        <a href="{{route('blog.index')}}" class="nav-link">Блог</a>
                    </li>
                    <li class="dropdown nav-item {{$isActiveRoute('about')}}">
                        <a href="{{route('about')}}" class="nav-link">О нас</a>
                    </li>
                    <li class=" dropdown nav-item ">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="ion-ios-cart fs20"></i> (3)</a>
                        <ul class="dropdown-menu dropdown-menu-right cart-dropdown">
                            <li>Your cart</li>
                            <li class="cart-footer d-flex flex-column pt-4">
                                <a href="#" class="btn-dark btn btn-block">View cart</a>
                                <a href="#" class="theme-btn-color btn btn-block">Checkout</a>

                            </li>
                        </ul>
                    </li>
                    @auth
                        <li class="dropdown nav-item">
                            <a href="{{config('nova.path')}}" class="nav-link">Админ панель</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav><!--nav end-->
</header>
