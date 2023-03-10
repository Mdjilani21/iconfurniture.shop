@extends('admin.layout.app')

@section('adminmain-body')
    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>eCommerce Products Page</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Apps</a>
                                </li>
                                <li class="breadcrumb-item active">eCommerce Products Page
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!"
                                data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span
                                    class="hide-on-small-onl">Settings</span><i
                                    class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2"
                                        href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="row" id="ecommerce-products">
                            <div class="col s12 m3 l3 pr-0 hide-on-med-and-down animate fadeLeft">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title">Categories</span>
                                        <hr class="p-0 mb-10">
                                        <ul class="collapsible categories-collapsible">
                                            <li>
                                                <div class="collapsible-header">Watches <i class="material-icons">
                                                        keyboard_arrow_right </i></div>
                                                <div class="collapsible-body">
                                                    <p>Apple</p>
                                                    <p>Fitbit</p>
                                                    <p>Samsung</p>
                                                    <p>Fastrack</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header">Tablets <i class="material-icons">
                                                        keyboard_arrow_right </i></div>
                                                <div class="collapsible-body">
                                                    <p>Apple</p>
                                                    <p>Samsung</p>
                                                    <p>Lenovo</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header">Laptops <i class="material-icons">
                                                        keyboard_arrow_right </i></div>
                                                <div class="collapsible-body">
                                                    <p>Apple</p>
                                                    <p>Samsung</p>
                                                    <p>Lenovo</p>
                                                    <p>HP</p>
                                                    <p>Dell</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header">Phone <i class="material-icons">
                                                        keyboard_arrow_right </i></div>
                                                <div class="collapsible-body">
                                                    <p>Apple</p>
                                                    <p>Samsung</p>
                                                    <p>Lenovo</p>
                                                    <p>Mi</p>
                                                    <p>Nokia</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <span class="card-title mt-10">Price</span>
                                        <hr class="p-0 mb-10">
                                        <div id="price-slider"></div>
                                        <span class="card-title mt-10">Size</span>
                                        <hr class="p-0 mb-10">
                                        <div class="size-filter">
                                            <ul>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">L</a></li>
                                                <li class="active"><a href="#">M</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">XS</a></li>
                                            </ul>
                                        </div>
                                        <span class="card-title mt-10">Color</span>
                                        <hr class="p-0 mb-10">
                                        <form action="#" class="display-grid">
                                            <label class="mt-3">
                                                <input type="checkbox" />
                                                <span><i
                                                        class="material-icons vertical-align-bottom blue-grey-text text-lighten-5">
                                                        lens </i>
                                                    White</span>
                                            </label>
                                            <label class="mt-3">
                                                <input type="checkbox" />
                                                <span><i class="material-icons vertical-align-bottom black-text"> lens </i>
                                                    Black</span>
                                            </label>
                                            <label class="mt-3">
                                                <input type="checkbox" />
                                                <span><i class="material-icons vertical-align-bottom amber-text"> lens </i>
                                                    Amber</span>
                                            </label>
                                            <label class="mt-3">
                                                <input type="checkbox" />
                                                <span><i class="material-icons vertical-align-bottom blue-text"> lens </i>
                                                    Blue</span>
                                            </label>
                                            <label class="mt-3">
                                                <input type="checkbox" />
                                                <span><i class="material-icons vertical-align-bottom green-text"> lens </i>
                                                    Green</span>
                                            </label>
                                            <label class="mt-3">
                                                <input type="checkbox" />
                                                <span><i class="material-icons vertical-align-bottom link-text"> lens </i>
                                                    Pink</span>
                                            </label>
                                            <label class="mt-3">
                                                <input type="checkbox" />
                                                <span><i class="material-icons vertical-align-bottom yellow-text"> lens </i>
                                                    Yellow</span>
                                            </label>
                                        </form>
                                        <span class="card-title mt-10">Brand</span>
                                        <hr class="p-0 mb-10">
                                        <form action="#" class="display-grid">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Apple</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Samsung</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Dell</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Sony</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Nokia</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>JBL</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Philips</span>
                                            </label>
                                        </form>
                                        <span class="card-title mt-10">Offers</span>
                                        <hr class="p-0 mb-10">
                                        <form action="#" class="display-grid">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Offer</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>No Cost EMI</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Special Price</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Bank Offer</span>
                                            </label>
                                        </form>
                                        <span class="card-title mt-10">Customer Ratings</span>
                                        <hr class="p-0 mb-10">
                                        <form action="#" class="display-grid">
                                            <label>
                                                <input type="checkbox" />
                                                <span>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                </span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                </span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                </span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>
                                                    <i class="material-icons amber-text"> star </i>
                                                    <i class="material-icons amber-text"> star </i>
                                                </span>
                                            </label>
                                            <label>
                                                <input type="checkbox" />
                                                <span>
                                                    <i class="material-icons amber-text"> star </i>
                                                </span>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m12 l9 pr-0">
                                <div class="col s12 m4 l4">
                                    @foreach ($product as $product)
                                        <div class="card animate fadeLeft">
                                            <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                                            <div class="card-content">
                                                <p>{{ $product->category }}</p>
                                                <span class="card-title text-ellipsis">{{ $product->name }}</span>
                                                <img src="frontend/content/lmg/Dining.jpg" class="responsive-img"
                                                    alt="">
                                                <div class="display-flex flex-wrap justify-content-center">
                                                    <h5 class="mt-3">{{ $product->price }}.00 BDT</h5>
                                                    <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                        href="#modal1">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal">
                                            <div class="modal-content pt-2">
                                                <div class="row" id="product-one">
                                                    <div class="col s12">
                                                        <a class="modal-close right"><i
                                                                class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <img src="frontend/content/Asset/app-assets/images/cards/watch-2.png"
                                                            class="responsive-img" alt="">
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>{{ $product->category }}</p>
                                                        <h5>{{ $product->name }}</h5>
                                                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                            Star</span>
                                                        <p>Availability: <span class="green-text">Available
                                                                {{ $product->productQuantity }}</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4"><i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet">Accept SIM card and call</li>
                                                            <li class="list-item-bullet">Make calling instead of mobile
                                                                phone</li>
                                                            <li class="list-item-bullet">Sync music play and sync control
                                                                music</li>
                                                            <li class="list-item-bullet">Sync Facebook,Twiter,emailand
                                                                calendar</li>
                                                        </ul>
                                                        <h5>{{ $product->price }}.00 BDT <span
                                                                class="prise-text-style ml-2"> 20400.00 BDT</span></h5>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                            TO CART</a>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- <div class="col s12 m4 l4">
                                    <div class="card animate fadeUp">
                                        <div class="card-content">
                                            <p>Headphone</p>
                                            <span class="card-title text-ellipsis">Purple Solo 2 Wireless</span>
                                            <img src="frontend/content/Asset/app-assets/images/cards/headphone.png"
                                                class="responsive-img" alt="">
                                            <div class="display-flex flex-wrap justify-content-center">
                                                <h5 class="mt-3">$249.00</h5>
                                                <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                    href="#modal2">View</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Structure -->
                                    <div id="modal2" class="modal">
                                        <div class="modal-content">
                                            <a class="modal-close right"><i class="material-icons">close</i></a>
                                            <div class="row" id="product-two">
                                                <div class="col m6 s12">
                                                    <img src="frontend/content/Asset/app-assets/images/cards/headphone.png"
                                                        class="responsive-img" alt="">
                                                </div>
                                                <div class="col m6 s12">
                                                    <p>Headphone</p>
                                                    <h5>Purple Solo 2 Wireless</h5>
                                                    <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                        Star</span>
                                                    <p>Availability: <span class="red-text">Out of stock</span></p>
                                                    <hr class="mb-5">
                                                    <span class="vertical-align-top mr-4"><i
                                                            class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                    <ul class="list-bullet">
                                                        <li class="list-item-bullet">Fine-tuned acoustics for clarity</li>
                                                        <li class="list-item-bullet">Streamlined design for a custom-fit
                                                        </li>
                                                        <li class="list-item-bullet">Durable and foldable so you can take
                                                            them on-the-go</li>
                                                        <li class="list-item-bullet">ake calls and control music with
                                                            RemoteTalk cable</li>
                                                    </ul>
                                                    <h5>$249.00 <span class="prise-text-style ml-2">$559.00</span></h5>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                        TO CART</a>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 l4">
                                    <div class="card animate fadeRight">
                                        <div class="card-content">
                                            <p>Smartphone</p>
                                            <span class="card-title">iPhone x</span>
                                            <img src="frontend/content/Asset/app-assets/images/cards/iphone-x.png"
                                                class="responsive-img" alt="">
                                            <div class="display-flex flex-wrap justify-content-center">
                                                <h5 class="mt-3">$899.00</h5>
                                                <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                    href="#modal3">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Structure -->
                                    <div id="modal3" class="modal">
                                        <div class="modal-content">
                                            <a class="modal-close right"><i class="material-icons">close</i></a>
                                            <div class="row" id="product-three">
                                                <div class="col m6 s12">
                                                    <img src="frontend/content/Asset/app-assets/images/cards/iphone-x.png"
                                                        class="responsive-img" alt="">
                                                </div>
                                                <div class="col m6 s12">
                                                    <p>Smartphone</p>
                                                    <h5>iPhone x</h5>
                                                    <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                        Star</span>
                                                    <p>Availability: <span class="green-text">Available</span></p>
                                                    <hr class="mb-5">
                                                    <span class="vertical-align-top mr-4"><i
                                                            class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                    <ul class="list-bullet">
                                                        <li class="list-item-bullet">Accept SIM card and call</li>
                                                        <li class="list-item-bullet">Take photos</li>
                                                        <li class="list-item-bullet">Make calling instead of mobile phone
                                                        </li>
                                                        <li class="list-item-bullet">Sync music play and sync control music
                                                        </li>
                                                        <li class="list-item-bullet">Sync Facebook,Twiter,emailand calendar
                                                        </li>
                                                    </ul>
                                                    <h5>$899.00</h5>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                        TO CART</a>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12">
                                    <div class="card animate fadeUp">
                                        <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                                        <div class="card-content">
                                            <div class="row" id="product-four">
                                                <div class="col m6 s12">
                                                    <img src="frontend/content/Asset/app-assets/images/cards/remote.png"
                                                        class="responsive-img" alt="">
                                                </div>
                                                <div class="col m6 s12">
                                                    <p>Powerbank</p>
                                                    <h5>Game Remote</h5>
                                                    <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                        Star</span>
                                                    <p>Availability: <span class="green-text">Available</span></p>
                                                    <hr class="mb-5">
                                                    <span class="vertical-align-top mr-4"><i
                                                            class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                    <ul class="list-bullet">
                                                        <li class="list-item-bullet">Dual output USB interfaces</li>
                                                        <li class="list-item-bullet">Compatible with all smartphones</li>
                                                        <li class="list-item-bullet">Portable design and light weight</li>
                                                        <li class="list-item-bullet">Battery type: Lithium-ion</li>
                                                    </ul>
                                                    <h5 class="red-text">$79.00 <span
                                                            class="grey-text lighten-2 ml-3">$199.00</span> </h5>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-deep-purple-blue z-depth-4 mt-2 mr-2">ADD
                                                        TO
                                                        CART</a>
                                                    <a
                                                        class="waves-effect waves-light btn gradient-45deg-purple-deep-orange z-depth-4 mt-2">BUY
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="electronic-products">
                                    <div class="col s12 m4 l4">
                                        <div class="card animate fadeLeft">
                                            <div class="card-content">
                                                <p>Powerbank</p>
                                                <span class="card-title text-ellipsis">Powerbank 11300 MAH</span>
                                                <img src="frontend/content/Asset/app-assets/images/cards/powerbank.png"
                                                    class="responsive-img" alt="">
                                                <div class="display-flex flex-wrap justify-content-center">
                                                    <h5 class="mt-3">$1,300.00</h5>
                                                    <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                        href="#modal4">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal4" class="modal">
                                            <div class="modal-content">
                                                <a class="modal-close right"><i class="material-icons">close</i></a>
                                                <div class="row" id="product-five">
                                                    <div class="col m6 s12">
                                                        <img src="frontend/content/Asset/app-assets/images/cards/powerbank.png"
                                                            class="responsive-img" alt="">
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>Powerbank</p>
                                                        <h5>Powerbank 11300 mAh</h5>
                                                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                            Star</span>
                                                        <p>Availability: <span class="green-text">Available</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4">
                                                            <i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet">Dual output USB interfaces</li>
                                                            <li class="list-item-bullet">Compatible with all smartphones
                                                            </li>
                                                            <li class="list-item-bullet">Portable design and light weight
                                                            </li>
                                                            <li class="list-item-bullet">Battery type: Lithium-ion</li>
                                                        </ul>
                                                        <h5>$1,300.00</h5>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                            TO CART</a>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4 l4">
                                        <div class="card animate fadeUp">
                                            <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                                            <div class="card-content">
                                                <p>Speakers</p>
                                                <span class="card-title text-ellipsis">Wireless Audio System</span>
                                                <img src="frontend/content/Asset/app-assets/images/cards/speakers.png"
                                                    class="responsive-img" alt="">
                                                <div class="display-flex flex-wrap justify-content-center">
                                                    <h5 class="mt-3">$2,299.00</h5>
                                                    <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                        href="#modal5">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal5" class="modal">
                                            <div class="modal-content">
                                                <a class="modal-close right"><i class="material-icons">close</i></a>
                                                <div class="row" id="product-six">
                                                    <div class="col m6 s12">
                                                        <img src="frontend/content/Asset/app-assets/images/cards/speakers.png"
                                                            class="responsive-img" alt="">
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>Audio Speakers</p>
                                                        <h5>Wireless Audio System</h5>
                                                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                            Star</span>
                                                        <p>Availability: <span class="red-text">Out of stock</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4"><i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet">360 Omnidirectional Sound</li>
                                                            <li class="list-item-bullet">Compatible with all smartphones
                                                            </li>
                                                            <li class="list-item-bullet">Easy Intuitive Control</li>
                                                            <li class="list-item-bullet">Multiroom App</li>
                                                        </ul>
                                                        <h5>$2,299.00</h5>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                            TO CART</a>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4 l4">
                                        <div class="card animate fadeRight">
                                            <div class="card-content">
                                                <p>Cameras</p>
                                                <span class="card-title text-ellipsis">White NX Mini F1</span>
                                                <img src="frontend/content/Asset/app-assets/images/cards/cameras.png"
                                                    class="responsive-img" alt="">
                                                <div class="display-flex flex-wrap justify-content-center">
                                                    <h5 class="mt-3">$559.00</h5>
                                                    <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                        href="#modal6">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal6" class="modal">
                                            <div class="modal-content">
                                                <a class="modal-close right"><i class="material-icons">close</i></a>
                                                <div class="row" id="product-seven">
                                                    <div class="col m6 s12">
                                                        <img src="frontend/content/Asset/app-assets/images/cards/cameras.png"
                                                            class="responsive-img" alt="">
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>Cameras</p>
                                                        <h5>White NX Mini F1 SMART NX</h5>
                                                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2
                                                            Star</span>
                                                        <p>Availability: <span class="green-text">Available</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4"><i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet">Ultra Slim & Stylish</li>
                                                            <li class="list-item-bullet">Perfect for Selfies</li>
                                                            <li class="list-item-bullet">Capture & Share on the Go</li>
                                                            <li class="list-item-bullet">Outstanding Optics</li>
                                                        </ul>
                                                        <h5>$559.00</h5>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                            TO CART</a>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4 l4">
                                        <div class="card animate fadeLeft">
                                            <div class="card-content">
                                                <p>Phone</p>
                                                <span class="card-title text-ellipsis">OnePlus 6T</span>
                                                <img src="frontend/content/Asset/app-assets/images/cards/oneplus-6t.png"
                                                    class="responsive-img" alt="">
                                                <div class="display-flex flex-wrap justify-content-center">
                                                    <h5 class="mt-3">$499.00</h5>
                                                    <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                        href="#modal7">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal7" class="modal">
                                            <div class="modal-content">
                                                <a class="modal-close right"><i class="material-icons">close</i></a>
                                                <div class="row" id="product-eight">
                                                    <div class="col m6 s12">
                                                        <img src="frontend/content/Asset/app-assets/images/cards/oneplus-6t.png"
                                                            class="responsive-img" alt="">
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>Phone</p>
                                                        <h5>OnePlus 6T</h5>
                                                        <span class="new badge left ml-0 mr-2" data-badge-caption="">5
                                                            Star</span>
                                                        <p>Availability: <span class="green-text">Available</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4"><i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet">Ultra Slim & Stylish</li>
                                                            <li class="list-item-bullet">Smoother than Stock.</li>
                                                            <li class="list-item-bullet">OxygenOS</li>
                                                            <li class="list-item-bullet">Outstanding Optics</li>
                                                        </ul>
                                                        <h5>$499.00</h5>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                            TO CART</a>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4 l4">
                                        <div class="card animate fadeUp">
                                            <div class="card-content">
                                                <p>Smart Speakers</p>
                                                <span class="card-title text-ellipsis">Amazon Alexa</span>
                                                <img src="frontend/content/Asset/app-assets/images/cards/smartspeakers.png"
                                                    class="responsive-img" alt="">
                                                <div class="display-flex justify-content-center flex-wrap">
                                                    <h5 class="mt-3">$799.00</h5>
                                                    <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                        href="#modal8">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal8" class="modal">
                                            <div class="modal-content">
                                                <a class="modal-close right"><i class="material-icons">close</i></a>
                                                <div class="row" id="product-nine">
                                                    <div class="col m6 s12">
                                                        <img src="frontend/content/Asset/app-assets/images/cards/smartspeakers.png"
                                                            class="responsive-img" alt="">
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>Smart Speakers</p>
                                                        <h5>Amazon Alexa</h5>
                                                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.9
                                                            Star</span>
                                                        <p>Availability: <span class="green-text">Available</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4"><i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet">Ultra Slim & Stylish</li>
                                                            <li class="list-item-bullet">Controls smart home devices</li>
                                                            <li class="list-item-bullet">Dual speakers powered by Dolby
                                                            </li>
                                                            <li class="list-item-bullet">Alexa Calling</li>
                                                        </ul>
                                                        <h5>$559.00</h5>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                            TO CART</a>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4 l4">
                                        <div class="card animate fadeRight">
                                            <div class="card-content">
                                                <p>Mouse</p>
                                                <span class="card-title text-ellipsis">Apple Magic Mouse</span>
                                                <img src="frontend/content/Asset/app-assets/images/cards/magic-mouse.png"
                                                    class="responsive-img" alt="">
                                                <div class="display-flex flex-wrap justify-content-center">
                                                    <h5 class="mt-3">$359.00</h5>
                                                    <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block modal-trigger z-depth-4"
                                                        href="#modal9">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Structure -->
                                        <div id="modal9" class="modal">
                                            <div class="modal-content">
                                                <a class="modal-close right"><i class="material-icons">close</i></a>
                                                <div class="row" id="product-ten">
                                                    <div class="col m6 s12">
                                                        <img src="frontend/content/Asset/app-assets/images/cards/magic-mouse.png"
                                                            class="responsive-img" alt="">
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>Mouse</p>
                                                        <h5>Apple Magic Mouse</h5>
                                                        <span class="new badge left ml-0 mr-2" data-badge-caption="">5
                                                            Star</span>
                                                        <p>Availability: <span class="green-text">Available</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4"><i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet">Ultra Slim & Stylish</li>
                                                            <li class="list-item-bullet">Bluetooth</li>
                                                            <li class="list-item-bullet">multi-touch capabilities</li>
                                                            <li class="list-item-bullet">Outstanding Optics</li>
                                                        </ul>
                                                        <h5>$359.00</h5>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD
                                                            TO CART</a>
                                                        <a
                                                            class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Pagination -->
                                {{-- <div class="col s12 center">
                                    <ul class="pagination">
                                        <li class="disabled">
                                            <a href="#!">
                                                <i class="material-icons">chevron_left</i>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#!">1</a>
                                        </li>
                                        <li class="waves-effect"><a href="#!">2</a>
                                        </li>
                                        <li class="waves-effect"><a href="#!">3</a>
                                        </li>
                                        <li class="waves-effect"><a href="#!">4</a>
                                        </li>
                                        <li class="waves-effect"><a href="#!">5</a>
                                        </li>
                                        <li class="waves-effect">
                                            <a href="#!">
                                                <i class="material-icons">chevron_right</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Page Main-->
    @endsection
