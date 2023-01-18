@extends('frontend.layout.app')

@section('main-body')
    <!-- product-section -->

    <section class="product-section py-4">
        <div class=" container">
            <div class="row">
                <div class="produact-title">
                    <h1 class="fw-bold fs-4 primary-text">HATIL TV Cabinet Dory-102</h1>
                    <p class="product-short-info">HCL-220-102-10-1-88</p>
                </div>
                <div class="col-12 col-sm-8">
                    <div class="row">
                        <div class="col-6 py-2 product-img">
                            <a href="#"><img src="frontend/content/single product/Dory-102.jpg" class="img-fluid img-thumbnail"
                                    alt=""></a>
                        </div>
                        <div class="col-6 py-2 product-img">
                            <a href="#"><img src="frontend/content/single product/Dory-102_0.jpg" class="img-fluid img-thumbnail"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 py-2 product-img">
                            <a href="#"><img src="frontend/content/single product/637803550993712032_Dory-102-2.jpg"
                                    class="img-fluid img-thumbnail" alt=""></a>
                        </div>
                        <div class="col-6 py-2 product-img">
                            <a href="#"><img src="frontend/content/single product/637803550993712032_Dory-102-1.jpg"
                                    class="img-fluid img-thumbnail" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 py-2 product-img">

                            <iframe style="height: 300px; width: auto; " class="img-fluid img-thumbnail"
                                src="https://hatil.com/sites/default/files/product_set_images/ar/hatilxr/index.html?id=HTL-220-102-10-1&amp;s=1&amp;tag=g"></iframe>

                        </div>
                        <div class="col-6 py-2 product-img">

                        </div>
                    </div>
                </div>
                <!-- product-buy-description -->
                <div class="col-12 col-sm-4">
                    <div class="product-buy-description">
                        <p class="fw-bold py-2">MATERIAL AND WOOD FINISH</p>
                        <button class="material-button">Lacquer Finish</button>
                        <p class="fw-bold py-2">MATERIAL AND WOOD FINISH (COLOR)</p>
                        <button class="color-finish-button">Antique</button>
                        <p class="fw-bold py-2">SIZE</p>
                        <button class="product-size">L770 X W460 X H900 mm</button>
                        <hr>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn text-start" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            16,300 BDT x 1 = 16,300 BDT
                            <p>EMI options starting from
                                1,358 BDT

                                *Price changes if Size/ Fabric/ Color/ Material changes.</p>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">SELECT A BANK TO KNOW ITS EMI
                                            FACILITIES
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <ul class="nav nav-pills mb-1 p-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active primary-hover-text" id="pills-City-Bank-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-City-Bank-" type="button"
                                                role="tab" aria-controls="pills-City-Bank-" aria-selected="true">City
                                                Bank </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link primary-hover-text" id="pills-Brac-Bank-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-Brac-Bank" type="button"
                                                role="tab" aria-controls="pills-Brac-Bank" aria-selected="false">Brac
                                                Bank</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link primary-hover-text" id="pills-Eastern-Bank-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-Eastern-Bank" type="button"
                                                role="tab" aria-controls="pills-Eastern-Bank"
                                                aria-selected="false">Eastern Bank </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link primary-hover-text" id="pills-DBBL-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-DBBL" type="button"
                                                role="tab" aria-controls="pills-DBBL"
                                                aria-selected="false">DBBL</button>
                                        </li>
                                        <li class="nav-item " role="presentation">
                                            <button class="nav-link primary-hover-text" id="pills-Mutual-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-Mutual" type="button"
                                                role="tab" aria-controls="pills-Mutual" aria-selected="false">Mutual
                                                Trust Bank</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-3" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-City-Bank-" role="tabpanel"
                                            aria-labelledby="pills-City-Bank--tab">* EMI valid only for 3 & 6 months
                                            Month(s) shown below other than that is invalid</div>
                                        <div class="tab-pane fade" id="pills-Brac-Bank" role="tabpanel"
                                            aria-labelledby="pills-Brac-Bank-tab">* EMI valid only for 3, 6 & 12 months
                                            Month(s) shown below other than that is invalid
                                        </div>
                                        <div class="tab-pane fade" id="pills-Eastern-Bank" role="tabpanel"
                                            aria-labelledby="pills-Eastern-Bank-tab">* EMI valid only for 3, 6 & 12
                                            months Month(s) shown below other than that is invalid
                                        </div>
                                        <div class="tab-pane fade" id="pills-DBBL" role="tabpanel"
                                            aria-labelledby="pills-DBBL-tab">* EMI valid only for 3 & 6 months Month(s)
                                            shown below other than that is invalid
                                        </div>
                                        <div class="tab-pane fade" id="pills-Mutual" role="tabpanel"
                                            aria-labelledby="pills-Mutual-tab">* EMI valid only for 3, 6 & 12 months
                                            Month(s) shown below other than that is invalid
                                        </div>
                                        <table class="table mt-2">
                                            <thead class=" primary-bg">
                                                <tr>
                                                    <th scope="col">EMI Tenor</th>
                                                    <th scope="col">Interest Payable</th>
                                                    <th scope="col">Down Payment</th>
                                                    <th scope="col">EMI Amount</th>
                                                    <th scope="col">Total Payment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3 Months</th>
                                                    <td>0 BDT</td>
                                                    <td>0 BDT</td>
                                                    <td>5433 BDT</td>
                                                    <td>16300</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6 Months</th>
                                                    <td>0 BDT</td>
                                                    <td>0 BDT</td>
                                                    <td>2717 BDT</td>
                                                    <td>16300</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">12 Months</th>
                                                    <td>0 BDT</td>
                                                    <td>0 BDT</td>
                                                    <td>1358 BDT</td>
                                                    <td>16300</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    <div class="quantity">
                        <p class=" p-1">QUANTITY</p>
                        <select class="quantity-form" aria-label="Default select example">
                            <option selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                            <option value="3">7</option>
                            <option value="3">8</option>
                            <option value="3">9</option>
                            <option value="3">10</option>
                        </select>
                    </div>

                        <div class="districts-list pt-2"> <select class="form-select m-1" name="districts_list"
                                id="districts_list">
                                <option value="">Select Location</option>
                                <option value="Barisal"> Barisal</option>
                                <option value="Bogra"> Bogra</option>
                                <option value="Brahmanbaria"> Brahmanbaria</option>
                                <option value="Chandpur"> Chandpur</option>
                                <option value="Chittagong"> Chittagong</option>
                                <option value="Comilla"> Comilla</option>
                                <option value="Dhaka"> Dhaka</option>
                                <option value="Dinajpur"> Dinajpur</option>
                                <option value="Faridpur"> Faridpur</option>
                                <option value="Feni"> Feni</option>
                                <option value="Gazipur"> Gazipur</option>
                                <option value="Gopalganj"> Gopalganj</option>
                                <option value="Habiganj"> Habiganj</option>
                                <option value="Jamalpur"> Jamalpur</option>
                                <option value="Jessore"> Jessore</option>
                                <option value="Jhenaidah"> Jhenaidah</option>
                                <option value="Joypurhat"> Joypurhat</option>
                                <option value="Khulna"> Khulna</option>
                                <option value="Kishoreganj"> Kishoreganj</option>
                                <option value="Kushtia"> Kushtia</option>
                                <option value="Lakshmipur"> Lakshmipur</option>
                                <option value="Manikganj"> Manikganj</option>
                                <option value="Moulavibazar"> Moulavibazar</option>
                                <option value="Munshiganj"> Munshiganj</option>
                                <option value="Mymensingh"> Mymensingh</option>
                                <option value="Naogaon"> Naogaon</option>
                                <option value="Narayanganj"> Narayanganj</option>
                                <option value="Narsingdi"> Narsingdi</option>
                                <option value="Nilphamari"> Nilphamari</option>
                                <option value="Noakhali"> Noakhali</option>
                                <option value="Pabna"> Pabna</option>
                                <option value="Rajshahi"> Rajshahi</option>
                                <option value="Rangpur"> Rangpur</option>
                                <option value="Sirajgonj"> Sirajgonj</option>
                                <option value="Sylhet"> Sylhet</option>
                                <option value="Tangail"> Tangail</option>
                            </select>
                            <select class="form-select my-3" name="districts_list" id="districts_list">
                                <option value="">Select Location</option>
                                <option value="Barisal"> Barisal</option>
                                <option value="Bogra"> Bogra</option>
                                <option value="Brahmanbaria"> Brahmanbaria</option>
                                <option value="Chandpur"> Chandpur</option>
                                <option value="Chittagong"> Chittagong</option>
                                <option value="Comilla"> Comilla</option>
                                <option value="Dhaka"> Dhaka</option>
                                <option value="Dinajpur"> Dinajpur</option>
                                <option value="Faridpur"> Faridpur</option>
                                <option value="Feni"> Feni</option>
                                <option value="Gazipur"> Gazipur</option>
                                <option value="Gopalganj"> Gopalganj</option>
                                <option value="Habiganj"> Habiganj</option>
                                <option value="Jamalpur"> Jamalpur</option>
                                <option value="Jessore"> Jessore</option>
                                <option value="Jhenaidah"> Jhenaidah</option>
                                <option value="Joypurhat"> Joypurhat</option>
                                <option value="Khulna"> Khulna</option>
                                <option value="Kishoreganj"> Kishoreganj</option>
                                <option value="Kushtia"> Kushtia</option>
                                <option value="Lakshmipur"> Lakshmipur</option>
                                <option value="Manikganj"> Manikganj</option>
                                <option value="Moulavibazar"> Moulavibazar</option>
                                <option value="Munshiganj"> Munshiganj</option>
                                <option value="Mymensingh"> Mymensingh</option>
                                <option value="Naogaon"> Naogaon</option>
                                <option value="Narayanganj"> Narayanganj</option>
                                <option value="Narsingdi"> Narsingdi</option>
                                <option value="Nilphamari"> Nilphamari</option>
                                <option value="Noakhali"> Noakhali</option>
                                <option value="Pabna"> Pabna</option>
                                <option value="Rajshahi"> Rajshahi</option>
                                <option value="Rangpur"> Rangpur</option>
                                <option value="Sirajgonj"> Sirajgonj</option>
                                <option value="Sylhet"> Sylhet</option>
                                <option value="Tangail"> Tangail</option></select>

                               <select class="form-select my-3" name="districts_list" id="districts_list">
                                <option value="">Select Location</option>
                                <option value="Barisal"> Barisal</option>
                                <option value="Bogra"> Bogra</option>
                                <option value="Brahmanbaria"> Brahmanbaria</option>
                                <option value="Chandpur"> Chandpur</option>
                                <option value="Chittagong"> Chittagong</option>
                                <option value="Comilla"> Comilla</option>
                                <option value="Dhaka"> Dhaka</option>
                                <option value="Dinajpur"> Dinajpur</option>
                                <option value="Faridpur"> Faridpur</option>
                                <option value="Feni"> Feni</option>
                                <option value="Gazipur"> Gazipur</option>
                                <option value="Gopalganj"> Gopalganj</option>
                                <option value="Habiganj"> Habiganj</option>
                                <option value="Jamalpur"> Jamalpur</option>
                                <option value="Jessore"> Jessore</option>
                                <option value="Jhenaidah"> Jhenaidah</option>
                                <option value="Joypurhat"> Joypurhat</option>
                                <option value="Khulna"> Khulna</option>
                                <option value="Kishoreganj"> Kishoreganj</option>
                                <option value="Kushtia"> Kushtia</option>
                                <option value="Lakshmipur"> Lakshmipur</option>
                                <option value="Manikganj"> Manikganj</option>
                                <option value="Moulavibazar"> Moulavibazar</option>
                                <option value="Munshiganj"> Munshiganj</option>
                                <option value="Mymensingh"> Mymensingh</option>
                                <option value="Naogaon"> Naogaon</option>
                                <option value="Narayanganj"> Narayanganj</option>
                                <option value="Narsingdi"> Narsingdi</option>
                                <option value="Nilphamari"> Nilphamari</option>
                                <option value="Noakhali"> Noakhali</option>
                                <option value="Pabna"> Pabna</option>
                                <option value="Rajshahi"> Rajshahi</option>
                                <option value="Rangpur"> Rangpur</option>
                                <option value="Sirajgonj"> Sirajgonj</option>
                                <option value="Sylhet"> Sylhet</option>
                                <option value="Tangail"> Tangail</option>
                            </select>
                            <p class="p-2">Estimated date is
                                Please select district and area to get possible delivery date</p>
                                <div class="d-grid gap-2"><button class="btn primary-bg"><span class="cart-title"><a class=" text-white" href="#">Add to cart</a></span> <span class="fas fa-shopping-cart"></span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Dimensions -->
    <section class="Product-slider">
        <div class=" container">
            <div class="row">
                <div class="col-12 py-4">
                    <h1 class="fw-bold fs-4 text-center py-2">Product Dimensions</h1>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="frontend/content/single product/Dory-102-DI_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="frontend/content/single product/Dory-102-DI_2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="frontend/content/single product/Dory-102-DI_3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Information -->
    <section class="Products-Information">
        <div class=" container">
            <div class="row">
                <div class="Products-Information py-4">
                    <h1 class="fw-bold fs-4 text-center py-2">Products and Service Information</h1>
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-4 col-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active text-start primary-hover-text" id="v-pills-home-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"
                                aria-controls="v-pills-home" aria-selected="true">Features</button>
                            <button class="nav-link text-start primary-hover-text" id="v-pills-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Furniture care
                                information</button>
                            <button class="nav-link text-start primary-hover-text" id="v-pills-messages-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">Warranty</button>
                            <button class="nav-link text-start primary-hover-text" id="v-pills-settings-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Exchange and Return</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <ul class="Products-Information-itm">
                                    <li>Made from Kiln-dried imported Beech wood, veneered engineered wood and veneered
                                        MDF.</li>
                                    <li>High quality environment friendly Polyurethane (PU) Lacquer in antique finish
                                    </li>
                                    <li>Please refer to images for dimension details
                                    </li>
                                    <li>Any assembly or installation required will be done by the HATIL team at the time
                                        of delivery (one day after delivery for CKD items)
                                    </li>
                                    <li>Imported high quality hardware fittings
                                    </li>
                                    <li>Indoor use only
                                    </li>
                                    <li>Weight 19.00 Kgs
                                    </li>
                                    <li>Most of our furniture is made of natural components, which will have natural
                                        differences in grain construction and occasional minor blemish.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <ul class="Products-Information-itm">
                                    <li>Any spillage should be wiped dry with a soft cloth immediately as there is a
                                        chance of staining.</li>
                                    <li>Caring for fine furniture is much simpler than most people realize. In most
                                        cases, dusting regularly with a clean, soft, lint-free cloth is sufficient. We
                                        recommend using a slightly dampened cloth for cleaning wood. Be sure to dry the
                                        surface gently after cleaning to avoid water spotting.</li>
                                    <li>Furniture should be lifted rather than dragged across a finished surface, to
                                        change its position.</li>
                                    <li>Avoid exposing your furniture to strong sunlight. Unfiltered ultraviolet (UV)
                                        rays will discolor and damage wood, finishes, fabrics, leather and rugs over
                                        time.
                                    </li>
                                    <li>Controlling relative humidity and temperature is important to the long life of
                                        fine wood furniture, leather and upholstery. Our furniture is already allowanced
                                        for natural fluctuations of temperature and humidity. For instance, solid
                                        tabletops will expand slightly in the summer and contract in the dryer winter
                                        months without any negative effect.
                                    </li>
                                    <li>Nail polish remover, hair spray, perfume, potpourri and, glass cleaner (or any
                                        other products that contain solvents) can damage wooden finishes. Do not place
                                        these products directly on a wooden surface.
                                    </li>
                                    <li>Rubber, cork, vinyl or plastic products can damage some finishes. Use caution
                                        when placing telephones, clocks and electronics with rubber and plastic footpad
                                        on a finished surface because it can react with lacquer finish. Avoid placing
                                        vinyl or cork placemats, coasters directly on a wood surface. To prevent damage,
                                        you may use a protective layer (cotton, linen or felt cloth) between the object
                                        and the finish.
                                    </li>
                                    <li>Avoid exposing the furniture finish to items (e.g. laptop, desktop, oven etc.)
                                        creating extreme heat, cold or moisture. Use protective padding under these
                                        items to avoid damaging the finish. Please follow manufacturer’s instructions
                                        carefully when using any product on your furniture.
                                    </li>
                                    <li>Avoid placing / keeping furniture in wet and damp places. High moisture often
                                        attracts “white-ants” (DuB †cvKv) and nothing can prevent them from destroying
                                        the furniture. Remember our furniture is termite protected but not white-ants.
                                        Sufficient sunlight and airflow can save your furniture from white-ants.
                                        Besides, wet and damp environment attracts fungus to grow on your furniture.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <ul class="Products-Information-itm">
                                    <li>The product comes with a 12 months after sales service warranty (parts and
                                        labor) against any manufacturing defects and any other issues with the materials
                                        that have been used.</li>
                                    <li>The warranty does not cover damages due to usage of the product beyond its
                                        intended use and wear & tear in the natural course of product usage.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <ul class="Products-Information-itm">
                                    <li><b>Exchange policy:</b> Furniture can be
                                        exchanged in good condition within 3 days with 5% service charge. It is not
                                        applicable
                                        for customized, set broken and fabric product..<br></li>
                                    <li><b>Return-Refund policy:</b> Furniture can be returned in good condition within
                                        3 days
                                        and money can be refunded with 10% service charge. It is not applicable for
                                        customized,
                                        set broken and fabric product.</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tv Cabinet -->
    <section class="Tv-Cabinet">
        <div class=" container">
            <div class="row justify-content-center p-4">
                <h1 class="fw-bold fs-4 text-center py-2">Products and Service Information</h1>
                <img class=" img-fluid img-thumbnail w-25" src="./single product/tv-cabinet-dory-102.png" alt="">
            </div>
            <div class="row py-4">
                <p class="fw-bold py-3 Tv-Cabinet-document-title">Why Should You Purchase this TV Cabinet?</p>
                <div class="Tv-Cabinet-document py-2">
                    <p class="fw-bold">Serve Your Lots of Purposes</p>
                    <p>You can use it as a TV cabinet, bookshelf, and showpiece holder. This item can serve lots of
                        purposes. If your TV is small in length and your living room is less spacious, you are highly
                        recommended to purchase this TV cabinet. Plus, its elegant design will catch anyone's attention.
                    </p>
                </div>
                <div class="Tv-Cabinet-document py-2">
                    <p class="fw-bold">Materials also Matter</p>
                    <p>HATIL uses Imported German Beech wood that is multiple times more durable than regular wood.
                        Plus, the Italian lacquer on the product ensures sleekness and the best finishing in the
                        furniture market of Bangladesh.
                    </p>
                </div>
                <div class="Tv-Cabinet-document py-2">
                    <p class="fw-bold">Best for Less Spacious Living Room</p>
                    <p>This TV cabinet is an excellent option for space-conscious customers because of its minimalistic
                        design. You can use it wherever you want to place.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection