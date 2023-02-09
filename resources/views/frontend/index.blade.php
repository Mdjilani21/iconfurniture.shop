@extends('frontend.layout.app')

@section('main-body')
    <!-- Header Main -->
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
                            <input type="text" name="productName" id="searchProduct"
                                placeholder="Search Products..............."><button
                                class=" h-search-button primary-bg primary-style" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <div class="col-4">
                    <ul class=" nav justify-content-end">
                        @if (Session::get('name'))
                            <li class=" nav-item"><a class=" nav-link primary-style primary-bg Login-button"
                                    href="">{{ Session::get('name') }}
                                    <p class="far fa-user"></p>
                                </a>
                            </li>
                            <li class=" nav-item"><a class=" nav-link primary-style primary-bg Logout-button"
                                href="{{ route('logout') }}">Logout
                                <p class="far fa-user"></p>
                            </a>
                            </li>
                            <li class=" nav-item"><a class=" nav-link far fa-heart primary-text fs-4" href=""></a>
                            </li>
                            <li class=" nav-item "><a class=" nav-link fas fa-shopping-cart primary-text fs-4"
                                    href=""></a>
                            </li>
                        @else
                            <li class=" nav-item"><a class=" nav-link primary-style primary-bg Login-button"
                                    href="{{ route('login') }}">Login
                                    <p class="far fa-user"></p>
                                </a></li>
                            <li class=" nav-item"><a class=" nav-link far fa-heart primary-text fs-4" href=""></a>
                            </li>
                            <li class=" nav-item "><a class=" nav-link fas fa-shopping-cart primary-text fs-4"
                                    href=""></a>
                            </li>
                        @endif
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

                            <li class=" nav-item "><a class=" nav-link hover-style" href="#">Great Festive sale</a>
                            </li>
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
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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

    <!-- HEader Main Ends -->

    <!-- hiro section-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="frontend/content/lmg/benar.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="frontend/content/lmg/benar2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="frontend/content/lmg/benar.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="category py-4 py-sm-5">
        <div class=" container text-center">
            <div class="row">
                <p class="fw-bold fs-4">Popular Furniture <span class=" primary-text">By Choice</span></p>
                <p class=" text-secondary fs-5">Categories our customers love to check out
                </p>
            </div>
        </div>
    </div>

    <!-- category-list -->

    <section class="category-list">
        <div class=" container py-4">
            <div class="row">
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="row">
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Sofas.jpg"
                                    alt="">
                            <p class="">Sofas</p>
                            </p>
                        </div>
                        <div class="category-list-item col-6">
                            <p><img class="img-fluid rounded-circle img-thumbnail" src="frontend/content/lmg/Beds.jpg"
                                    alt="">
                            <p class="">Beds</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- category-slider-pc -->

    <section class="category-slider-pc py-4">
        <div class=" container">
            <div class="row">

                <div class=" container text-center">
                    <div class="row">
                        <p class="fw-bold fs-4">Buy Furniture <span class=" primary-text">Based on Space</span></p>
                    </div>
                </div>

                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                    data-bs-interval="false">
                    <div class="carousel-inner py-3">

                        <div class="carousel-item active">

                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/category-list.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg Buy-Now-button">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/Office.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg Buy-Now-button">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/Living.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg Buy-Now-button">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/category-list.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/Office.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/Living.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">

                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/category-list.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/Office.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 m-2">
                                            <img src="frontend/content/lmg/Living.jpg" class="card-img-top"
                                                alt="...">
                                            <div class="card-body ">
                                                <h5 class="card-title"><a class="primary-hover-text"
                                                        href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                                                <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="fas fa-chevron-left" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="fas fa-chevron-right" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- category-slider-mobile  -->
    <section class="category-slider-mobile py-4">
        <div class=" container">
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card p-3 m-2">
                        <img src="frontend/content/lmg/category-list.jpg" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                            <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                        </div>
                    </div>
                </div>
                <div class=" col-6 col-md-4">
                    <div class="card p-3 m-2">
                        <img src="frontend/content/lmg/Office.jpg" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                            <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card p-3 m-2">
                        <img src="frontend/content/lmg/Living.jpg" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">Bedroom</a></h5>
                            <a href="#" class="btn primary-bg">EXPLORE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product benar -->
    <section class="product-benar py-4">
        <div class=" container">
            <div class="row">
                <div class="col-6 col-md-4 p-3">
                    <img class=" img-fluid img-thumbnail" src="frontend/content/lmg/Screenshot_1.png" alt="">
                </div>
                <div class=" col-6 col-md-4 p-3">
                    <img class=" img-fluid img-thumbnail" src="frontend/content/lmg/Screenshot_2.png" alt="">
                </div>
                <div class="col-6 col-md-4 p-3">
                    <img class=" img-fluid img-thumbnail" src="frontend/content/lmg/Screenshot_2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Best Selling section-->
    <section class="Best-Selling-section py-5">
        <div class=" container">
            <div class="row">
                <div class=" container text-center">
                    <div class="row">
                        <p class="fw-bold fs-4">Buy Furniture <span class=" primary-text">Best Selling</span></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 p-3">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/Screenshot_4.png" class="card-img-top img-fluid product-img-1"
                                alt="...">
                            <img src="frontend/content/lmg/Screenshot_5.png" class="card-img-top img-fluid product-img-2"
                                alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text py-2 product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button ">Buy Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-md-4 p-3">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/Screenshot_4.png" class="card-img-top img-fluid product-img-1"
                                alt="...">
                            <img src="frontend/content/lmg/Screenshot_5.png" class="card-img-top img-fluid product-img-2"
                                alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text py-2 product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button">Buy Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-md-4 p-3">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/Screenshot_4.png" class="card-img-top img-fluid product-img-1"
                                alt="...">
                            <img src="frontend/content/lmg/Screenshot_5.png" class="card-img-top img-fluid product-img-2"
                                alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text py-2 product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol-hold">৳ <span
                                        class="Price-amount-hold">36400</span></span>
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button">Buy Now</a>
                        </div>
                        <span class="badge primary-bg">
                            10% <span>save</span>
                        </span>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Decor -->
    <section class="Decor-section">
        <div class=" container">
            <div class="row py-4">
                <div class=" container text-center">
                    <div class="row">
                        <p class="fw-bold fs-4">Value Buys <span class=" primary-text">in Decor</span></p>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 py-2">
                    <div class="card text-center Decor-itm">
                        <img class=" card-img-top" src="frontend/content/lmg/Screenshot_6.png" alt="">
                        <div class="card-body">
                            <p class="card-text">WaII Decor</p>
                            <h5 class="card-title">Form 199</h5>
                            <a class=" stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 py-2">
                    <div class="card text-center Decor-itm">
                        <img class=" card-img-top" src="frontend/content/lmg/Screenshot_7.png" alt="">
                        <div class="card-body">
                            <p class="card-text">WaII Decor</p>
                            <h5 class="card-title">Form 199</h5>
                            <a class=" stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 py-2">
                    <div class="card text-center Decor-itm">
                        <img class=" card-img-top" src="frontend/content/lmg/Screenshot_8.png" alt="">
                        <div class="card-body">
                            <p class="card-text">WaII Decor</p>
                            <h5 class="card-title">Form 199</h5>
                            <a class=" stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 py-2">
                    <div class="card text-center Decor-itm">
                        <img class=" card-img-top" src="frontend/content/lmg/Screenshot_6.png" alt="">
                        <div class="card-body">
                            <p class="card-text">WaII Decor</p>
                            <h5 class="card-title">Form 199</h5>
                            <a class=" stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 py-2">
                    <div class="card text-center Decor-itm">
                        <img class=" card-img-top" src="frontend/content/lmg/Screenshot_7.png" alt="">
                        <div class="card-body">
                            <p class="card-text">WaII Decor</p>
                            <h5 class="card-title">Form 199</h5>
                            <a class=" stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 py-2">
                    <div class="card text-center  Decor-itm">
                        <img class=" card-img-top" src="frontend/content/lmg/Screenshot_8.png" alt="">
                        <div class="card-body">
                            <p class="card-text">WaII Decor</p>
                            <h5 class="card-title">Form 199</h5>
                            <a class=" stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product benar-2 -->
    <section class="product-benar-2 py-4">
        <div class=" container">
            <div class="row">
                <div class="col-6 p-3">
                    <img class=" img-fluid img-thumbnail" src="frontend/content/lmg/Screenshot_9.png" alt="">
                </div>
                <div class="col-6 p-3">
                    <img class=" img-fluid img-thumbnail" src="frontend/content/lmg/Screenshot_10.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- product-grid -->
    <section class="Best-Selling-section py-5">
        <div class=" container">
            <div class="row">
                <div class=" container">
                    <div class="row">
                        <p class="fw-bold fs-4 border-title mb-2">Kids Furniture</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 p-1">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/bathroom-product-2-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-1" alt="...">
                            <img src="frontend/content/lmg/bathroom-product-12-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-2" alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button ">Buy Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-md-4 col-lg-2 p-1">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/bathroom-product-3-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-1" alt="...">
                            <img src="frontend/content/lmg/bathroom-product-13-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-2" alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button">Buy Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-md-4 col-lg-2 p-1">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/bathroom-product-4-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-1" alt="...">
                            <img src="frontend/content/lmg/bathroom-product-14-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-2" alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol-hold">৳ <span
                                        class="Price-amount-hold">36400</span></span>
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button">Buy Now</a>
                        </div>
                        <span class="badge primary-bg">
                            10% <span>save</span>
                        </span>
                    </div>

                </div>
                <div class="col-6 col-md-4 col-lg-2 p-1">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/bathroom-product-6-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-1" alt="...">
                            <img src="frontend/content/lmg/bathroom-product-16-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-2" alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button">Buy Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-md-4 col-lg-2 p-1">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/bathroom-product-17-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-1" alt="...">
                            <img src="frontend/content/lmg/bathroom-product-19-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-2" alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol-hold">৳ <span
                                        class="Price-amount-hold">36400</span></span>
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button">Buy Now</a>
                        </div>
                        <span class="badge primary-bg">
                            10% <span>save</span>
                        </span>
                    </div>

                </div>
                <div class="col-6 col-md-4 col-lg-2 p-1">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="frontend/content/lmg/bathroom-product-15-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-1" alt="...">
                            <img src="frontend/content/lmg/bathroom-product-20-339x387.jpg"
                                class="product-grid-lmg card-img-top img-fluid product-img-2" alt="...">
                            <ul class="product-buy-itm text-center">
                                <i class="" data-bs-toggle="popover" title="Add to card" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-shopping-basket Add-to-card"
                                        href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Add to wishlist"
                                    data-bs-animation="false" data-bs-placement="top"><a
                                        class="fas fa-heart Add-to-wishlist" href="#"></a></i>
                                <i class="" data-bs-toggle="popover" title="Quick View" data-bs-animation="false"
                                    data-bs-placement="top"><a class="fas fa-eye Quick-View" href="#"></a></i>
                            </ul>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title product-title m-0"><a class="primary-hover-text"
                                    href="https://iconfurniture.shop/products.html">chair</a></h5>
                            <p class="card-text product-discrimination">Berlynoak Ford Wooden Dining Table 4S
                            </p>
                            <div class="price">
                                <span class="Price-currencySymbol">৳ <span class="Price-amount">30000</span></span>
                            </div>
                            <a href="#" class="primary-bg Buy-Now-button">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- product benar-3 -->
    <div class=" container">
        <div class="row py-4">
            <img class=" img-fluid img-thumbnail" src="frontend/content/lmg/Screenshot_11.png" alt="">
            <h3 class="product benar-3-title py-1">ICON FURNITUE: Modern Furniture Crafted with Eleance | বিশ্বস্ত
                ফর্নিচার ব্র্যন্ড
            </h3>
            <div class="seemore-itm">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel atque asperiores dolore aliquam maxime
                    minus repellat veritatis excepturi sequi sit.</p><a data-bs-toggle="collapse" class="seemore"
                    href="#seemore">See More</a>
                <div id="seemore" class="collapse">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero iste doloribus, quas, deleniti
                        consequatur similique voluptates facere, totam magni repellendus saepe rerum deserunt
                        perferendis quam!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
