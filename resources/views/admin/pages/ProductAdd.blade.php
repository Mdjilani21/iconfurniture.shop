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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Add Product</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Add</a>
                                </li>
                                <li class="breadcrumb-item active">Add Product
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
                                        href="user-profile-page.html">Profile<span class="new badge red">2</span></a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a>
                                </li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ url('Admin-ProductStore') }}" method="POST">
                @csrf
                <div class="col s12">
                    <div class="col s12 m12 l12" id="productAddedMessage" style="display: none;"><span class="alert alert-successful">Product Successfully Added</span></div>
                    <div class="container">
                        <div class="section">
                            <!-- HTML VALIDATION  -->

                            <div class="row">
                                <div class="col s12">
                                    <div id="html-validations" class="card card-tabs">
                                        <div class="card-content">
                                            <div class="card-title">
                                                <div class="row">
                                                    <div class="col s12 m6 l10">
                                                        <h4 class="card-title">Basics Section</h4>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="html-view-validations">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <label for="name">Product Name *</label>
                                                        <input class="validate" required id="name" name="name"
                                                            type="text">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label for="shortInfo">Product Short Info *</label>
                                                        <input class="validate" required id="shortInfo" type="text"
                                                            name="shortInfo">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="icons" required id="category" name="category">
                                                            <option value="0" name="Choose your option" disabled selected>Choose your option
                                                            </option>
                                                            <option value="Table" name="Table"
                                                                data-icon="frontend/content/Asset/app-assets/images/avatar/avatar-1.png">
                                                                Table</option>
                                                            <option value="Sofa" name="Sofa"
                                                                data-icon="frontend/content/Asset/app-assets/images/avatar/avatar-2.png">
                                                                Sofa</option>
                                                            <option value="Chair" name="Chair"
                                                                data-icon="frontend/content/Asset/app-assets/images/avatar/avatar-3.png">
                                                                Chair</option>
                                                        </select>
                                                        <label>Category</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label for="material">MATERIAL AND WOOD FINISH *</label>
                                                        <input class="validate" required id="material" type="text"
                                                            name="material">
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label for="materialColor">Color *</label>
                                                        <input class="validate" required id="materialColor" type="text"
                                                            name="materialColor">
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label for="productSize">Size *</label>
                                                        <input class="validate" required id="productSize" type="text"
                                                            name="productSize">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label for="productQuantity">Quantity *</label>
                                                        <input class="validate" required id="productQuantity"
                                                            type="text" name="productQuantity">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="container">
                        <div class="section">
                            <!-- HTML VALIDATION  -->

                            <div class="row">
                                <div class="col s12">
                                    <div id="html-validations" class="card card-tabs">
                                        <div class="card-content">
                                            <div class="card-title">
                                                <div class="row">
                                                    <div class="col s12 m6 l10">
                                                        <h4 class="card-title">Add Products Image</h4>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="html-view-validations">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <div id="multiple-file-input" class="card card-tabs">
                                                            <div class="card-content">
                                                                <div id="view-multiple-file-input">
                                                                    <div class="file-field input-field">
                                                                        <div class="btn">
                                                                            <span>Images</span>
                                                                            <input type="file" multiple required id="productImages" name="productImages">
                                                                        </div>
                                                                        <div class="file-path-wrapper">
                                                                            <input class="file-path validate"
                                                                                type="text"
                                                                                placeholder="Upload one or more files">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="section">
                        <!-- HTML VALIDATION  -->

                        <div class="row">
                            <div class="col s12">
                                <div id="html-validations" class="card card-tabs">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Price and Branch Section</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-view-validations">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <label for="price">Unit Price *</label>
                                                    <input class="validate" required id="price" type="text"
                                                        name="price">
                                                </div>

                                                <div class="input-field col s12">
                                                    <select class="icons" required id="branchDivision" name="branchDivision">
                                                        <option value="0" disabled selected >Choose product
                                                            Branch
                                                            Division</option>
                                                        <option value="Chattagram" name="Chattagram">Chattagram</option>
                                                        <option value="Dhaka" name="Dhaka">Dhaka</option>
                                                        <option value="Sylhet" name="Sylhet">Sylhet</option>
                                                    </select>
                                                    <label>Branch</label>
                                                    <select class="icons" required id="branchDistrict" name="branchDistrict">
                                                        <option value="0" disabled selected>Choose product
                                                            Branch
                                                            District</option>
                                                            <option value="Chattagram" name="Chattagram">Chattagram</option>
                                                            <option value="Dhaka" name="Dhaka">Dhaka</option>
                                                            <option value="Sylhet" name="Sylhet">Sylhet</option>
                                                    </select>
                                                    <select class="icons" required id="branchUpazila" name="branchUpazila">
                                                        <option value="0" disabled selected >Choose product
                                                            Branch
                                                            Upazila</option>
                                                            <option value="Chattagram" name="Chattagram">Chattagram</option>
                                                            <option value="Dhaka" name="Dhaka">Dhaka</option>
                                                            <option value="Sylhet" name="Sylhet">Sylhet</option>
                                                    </select>
                                                </div>

                                                <div class="input-field col s12">
                                                    <!-- Date Picker -->
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <div id="date-picker" class="card card-tabs">
                                                                <div class="card-content">
                                                                    <div class="card-title">
                                                                        <div class="row">
                                                                            <div class="col s12 m6 l6">
                                                                                <h4 class="card-title">Discount
                                                                                    Date
                                                                                    Range</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="view-date-picker">
                                                                        <label for="DiscountRange">Choose Date</label>
                                                                        <input type="text" class="datepicker" required id="DiscountRange" name="DiscountRange">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-field col s12">
                                                    <div class="input-field col s8">
                                                        <label for="discount">Discount *</label>
                                                        <input class="validate" required id="discount" type="text"
                                                            name="discount">
                                                    </div>
                                                    <div class="input-field col s4">
                                                        <select class="icons" required id="discountType" name="discountType">
                                                            <option value="Flat" name="Flat">Flat</option>
                                                            <option value="Percent" name="Percent">Percent</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="icons" required id="status" name="status">
                                                            <option value="Available" name="Available">Available</option>
                                                            <option value="Not Available" name="Not Available">Not Available</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label for="warranty">Warranty *</label>
                                                        <input class="validate" required id="warranty" type="text"
                                                            name="warranty">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label for="tags">Tags *</label>
                                                        <input class="validate" required id="tags" type="text"
                                                            name="tags">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label for="barcode">Barcode *</label>
                                                        <input class="validate" required id="barcode" type="text"
                                                            name="barcode">
                                                    </div>
                                                    <div class="col s12">
                                                        <label for="tnc_select1">T&C *</label>
                                                        <p>
                                                            <label>
                                                                <input class="validate" required id="tnc_select1"
                                                                    type="checkbox" name="tnc_select1"/>
                                                                <span>Please agree to our policies</span>
                                                            </label>
                                                        </p>
                                                        <div class="input-field">
                                                        </div>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <button class="btn waves-effect waves-light right" type="submit" id="submit"
                                                            name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- END: Page Main-->

        {{-- <script>
            $(document).ready(function(){
                $("#material").click(function(){
                    M.toast({ html: "Hey! I am a toast." });
                });
            });
        </script>             --}}

        <script>
            // @if (Session::has('success'))
            //     toast.option = 
            //     {
            //         "closeButton":true,
            //         "progressBar":true
            //     }
            // @endif
        </script>
    @endsection
