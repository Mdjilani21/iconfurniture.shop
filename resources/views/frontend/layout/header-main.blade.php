<header class="header-main-pc">
    <div class=" container border-dark border-bottom py-3">
        <div class="row">
            <div class="col-2">
                <div class="h-logo">
                    <img src="frontend/content/lmg/logo.png" alt="">
                </div>
            </div>
            <div class="col-6">
                <form action="{{ route('productListPage') }}" method="GET">
                    @csrf
                <div class="h-search">
                    <input type="text" name="productName" id="searchProduct" placeholder="Search Products..............."><button
                        class=" h-search-button primary-bg primary-style" type="submit">Search</button>
                </div>
                </form>
            </div>
            <div class="col-4">
                <ul class=" nav justify-content-end">
                    <li class=" nav-item"><a class=" nav-link primary-style primary-bg Login-button" href="#">Login
                            <p class="far fa-user"></p>
                        </a></li>
                    <li class=" nav-item"><a class=" nav-link far fa-heart primary-text fs-4" href=""></a></li>
                    <li class=" nav-item "><a class=" nav-link fas fa-shopping-cart primary-text fs-4" href=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<header class="header-button-pc">
    <div class=" container py-2">
        <div class="row">
            <div class="col-12">
                <div class="header-menu">
                    <ul class=" nav mr-auto">
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">Great Festive sale</a></li>
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">International
                                Collection</a></li>
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">Living</a></li>
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">Bedroom</a></li>
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">Dining</a></li>
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">Home Office</a></li>
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">Outdoor</a></li>
                        <li class=" nav-item "><a class=" nav-link hover-style" href="#">Furnishing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- header mobile -->
<header class=" header-mobile">
    <div class="momile-menu container ">
        <div class="header-menu navbar">
            <div class="mobile-menu-logo navbar-brand">
                <img src="frontend/content/lmg/logo.png" alt="">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" navbar-nav">
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">Great Festive sale</a></li>
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">International Collection</a>
                    </li>
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">Living</a></li>
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">Bedroom</a></li>
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">Dining</a></li>
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">Home Office</a></li>
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">Outdoor</a></li>
                    <li class=" nav-item "><a class=" nav-link hover-style" href="#">Furnishing</a></li>
                </ul>

                <div class="h-search">
                    <input type="text" placeholder="Search Products..............."><button
                        class=" h-search-button primary-bg primary-style" type="button">Search</button>
                </div>

            </div>

        </div>
    </div>
</header>