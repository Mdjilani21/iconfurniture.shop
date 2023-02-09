@extends('frontend.layout.app')

@section('main-body')
    <section class="section-container">
        <div class="card">
            <div class="row mt-2">
                @forelse ($searchProduct as $productItem)
                <div class="col-xs-6 col-sm-4 col-md-3" style="margin: 0 auto;">
                    <div class="box-item-blocks clearfix">
                        <div class="box clearfix"> <span class="sell-status status-black">New Arrival</span>
                            <div class="item-list">
                                <ul>
                                    <li class="even first last"><a href="{{ route('getDivisionList') }}"><img src="frontend/content/single product/Dory-102_0.jpg"
                                        class="img-fluid img-thumbnail" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-info-blocks clearfix">
                            <div class="info-section clearfix"> <span class="box-title"><a
                                        href="{{ route('getDivisionList') }}">{{ $productItem->name }}</a></span></div>
                            <div class="info-section clearfix" style="padding-top:5px"> <span class="">Starts From
                                    <span></span></span></div>
                            <div class="info-section clearfix" style="padding:5px 0px"> <span class=""><b><span
                                            class="uc-price">{{ $productItem->price }} BDT</span></b><span></span></span></div>
                            <div class="box-btn-blocks clearfix"> <span class="btn btn-primary item-id"
                                    data-item_id="30572"><a style="color: white;" href="{{ route('getDivisionList') }}">View Details</a></span></div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-12 p-2">
                    <h4>Product not available</h4>
                </div>
                    
                @endforelse
                

                <style>
                    .box-item-blocks {
                        margin: auto auto 20px auto;
                        -webkit-transition: all 2s ease;
                        -moz-transition: all 2s ease;
                        -ms-transition: all 2s ease;
                        transition: all 2s ease;
                        background-color: whitesmoke;
                        border-radius: 20px;
                    }

                    .clearfix {
                        zoom: 1;
                    }

                    .box {
                        background: #f9f9f9;
                        padding: 15px;
                        height: 268px;
                        /* max-width: 268px; */
                        text-align: center;
                        position: relative;
                        border: 1px solid #e8e8e8;
                        margin: 0 auto;
                    }

                    .status-black {
                        background: #263142;
                    }

                    .sell-status {
                        padding: 3px 5px;
                        border: 0;
                        position: absolute;
                        left: 0;
                        z-index: 1;
                        top: 8px;
                        display: block;
                        font-size: 12px;
                        line-height: 16px;
                        color: #fff;
                        text-align: center;
                    }

                    .item-list ul li {
                        margin: 0 0 .25em 1.5em;
                        padding: 0;
                    }

                    .box img {
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        vertical-align: middle;
                        margin: auto;
                        display: block;
                        -webkit-transition: all .1s ease;
                        -moz-transition: all .1s ease;
                        -ms-transition: all .1s ease;
                        transition: all .1s ease;
                        width: 100%;
                        height: 100%;
                        object-fit: fill;
                        opacity: 1;
                    }

                    img {
                        max-width: 100%;
                    }

                    .box-info-blocks {
                        display: block;
                        text-align: center;
                        padding: 20px 15px;
                        margin: auto;
                    }

                    .box-info-blocks {
                        display: block;
                        text-align: center;
                        padding: 20px 15px;
                        margin: auto;
                    }

                    .box-info-blocks .box-title {
                        height: 58px;
                        overflow: hidden;
                        line-height: 18px;
                        font-weight: 600;
                    }

                    .box-title {
                        display: block;
                        color: #3b3a3c;
                        font-weight: 500;
                        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                        font-size: 16px;
                    }

                    .uc-price {
                        white-space: nowrap;
                    }

                    .box-btn-blocks {
                        
                    }

                    .box-btn-blocks .btn-primary {
                        max-width: 155px;
                        max-height: 36px;
                        padding: 0;
                        width: 160px;
                    }

                    .box-btn-blocks a {
                        width: 145px;
                        display: inline-block;
                        margin: 0 3px;
                        text-align: center;
                        padding: 8px 10px;
                    }
                </style>
            </div>
        </div>
    </section>
@endsection
