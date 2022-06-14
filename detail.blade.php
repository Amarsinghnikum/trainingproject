
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="{{url('/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Custom Css -->
<!-- <link rel="stylesheet" href="{{url('/assets/css/styles3.css')}}"> -->
<link rel="stylesheet" href="{{url('/assets/css/main.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/timeline.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/color_skins.css')}}">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="{{url('/assets/css/searchbar.css')}}" rel="stylesheet">
<script src="{{url('/assets/js/searchbar.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    <body style="background-color:#fff;">
        <!-- navbar -->
       @include('navbar')
<!-- navbar ends -->
        <!-- Left Sidebar -->
        <div class="container">
        <aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs" style="background-color: rgb(101, 114, 184);">
        <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#dashboard"><i style="color:#fff;" class="zmdi zmdi-home"></i></a></li>
        <!-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#user">Professors</a></li> -->
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu" style="background-color: #6572b8;">
                <ul class="list" style="background-color: #6572b8;width: 100%;">
                    <li>
                        <div class="user-info">
                            
                        @php 
                        $investorname = "";
                        @endphp
                        @if(Session::get('usersession'))
                        @php
                            $sessiondata = Session::get('usersession');                                         
                            $investorname = $sessiondata->name;
                            $url="/index";
                            @endphp
                            @endif
                            <img src="{{url('assets/images/lg/mascotitsolution.jpg')}}" style="border-radius:70px;" width="100px" height="100px">
                            <div class="detail">
                            <a href="{{url('/')}}{{$url}}">
                            <h4 style="color: #fff;">{{$investorname}}</h4>
                            </div>
                        </div>
                    </li>
                    
                    <li class="active open"><a href="{{url('/search-detail')}}" style="margin-top:-10px;padding-left: 0px;"><i style="color:#fff;" class="zmdi zmdi-search"></i><span style="color: #fff;">SEARCH</span></a></li>
                    
                    <br>
                    <li class="active open"><a href="index.html" style="margin-top:-10px;padding-left: 0px;"><i style="color:#fff;" class="zmdi zmdi-home"></i><span style="color: #fff;">HOME</span></a></li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><span style="color: #fff;">MASTERS</span> </a>
                        <ul class="ml-menu">
                        <li><a href="{{url('/company')}}" style="color: #fff;">Add Company</a></li>
                            <li><a href="{{url('/category')}}" style="color: #fff;">Add Category</a></li>
                            <li><a href="{{url('/product')}}" style="color: #fff;">Add Products</a></li>
                            <li><a href="{{url('/states')}}" style="color: #fff;">Add States</a></li>
                            <li><a href="{{url('/cities')}}" style="color: #fff;">Add Cities</a></li>
                            <li><a href="{{url('/add-bom')}}" style="color: #fff;">Add Bom</a></li>
                            <li><a href="{{url('/product-category')}}" style="color: #fff;">Add Product Category</a></li>
                            <li><a href="{{url('/add-unit')}}" style="color: #fff;">Add Unit</a></li>
                            <li><a href="{{url('/add-customer')}}" style="color: #fff;">Add Customer/Vendor</a></li>
                            <li><a href="{{url('/add-drawing')}}" style="color: #fff;">Add Drawing</a></li>
                            <li><a href="{{url('/add-equipment')}}" style="color: #fff;">Add Equipment</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><span style="color: #fff;">TRANSACTION</span> </a>
                        <ul class="ml-menu">
                        <li><a href="#" style="color: #fff;">Add Company</a></li>
                            <li><a href="#" style="color: #fff;">Add Category</a></li>
                            <li><a href="#" style="color: #fff;">Add Products</a></li>
                            <li><a href="#" style="color: #fff;">Add States</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><span style="color: #fff;">REPORT</span> </a>
                        <ul class="ml-menu">
                        <li><a href="#" style="color: #fff;">Add Company</a></li>
                            <li><a href="#" style="color: #fff;">Add Category</a></li>
                            <li><a href="#" style="color: #fff;">Add Products</a></li>
                            <li><a href="#" style="color: #fff;">Add States</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="javascript:void(0);" class="menu-toggle"><span style="color: #fff;">IMPORT</span> </a>
                        <ul class="ml-menu">
                        
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><span style="color: #fff;">BACKUP</span> </a>
                        <ul class="ml-menu">
                        <li><a href="#" style="color: #fff;">Add Company</a></li>
                            <li><a href="#" style="color: #fff;">Add Category</a></li>
                            <li><a href="#" style="color: #fff;">Add Products</a></li>
                            <li><a href="#" style="color: #fff;">Add States</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        
    </div>    
</aside>


        	<div class="row"><br><br>
               <div class="col-xs-4 item-photo"><br>
                    <img style="max-width:120%;margin-top: 300px;padding-left: 150px;" src="{{ asset('assets2/item-image/'.$productimage->item_image)}}" />
                </div>
                <div class="col-xs-8" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                        <div class="form-group" style="padding-left: 125px;margin-top: 80px;width: 150%;">
                    <label for=""></label>

                        <div class="row">
                            <label for="staticEmail" class="col-sm-4 col-form-label" style="color:#666;">PRODUCT CATEGORY :</label>
                            <div>
                                <b>{{$productimage->product_cat}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">SIPPL CODE :</label>
                            <div>
                                <b>{{$productimage->suppl_code}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">OEM NAME :</label>
                            <div>
                                <b>{{$productimage->oem_name}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">OEM CODE :</label>
                            <div>
                                <b>{{$productimage->oem_code}}</b>
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">DESCRIPTION :</label>
                            <div>
                                <b>{{$productimage->discription}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">OES NAME :</label>
                            <div>
                                <b>{{$productimage->oes_name}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">OES NUMBER :</label>
                            <div>
                                <b>{{$productimage->oes_code}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">ALIAS :</label>
                            <div>
                                <b>{{$productimage->alias}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">EQUIPMENT CATEGORY :</label>
                            <div>
                                <b>{{$productimage->equip_cat}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">EQUIPMENT MODEL :</label>
                            <div>
                                <b>{{$productimage->equip_model}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">LIST PRICE</label>
                            <div>
                               <b>{{$productimage->list_price}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">HSN CODE:</label>
                            <div>
                                <b>{{$productimage->hsn_code}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">UNIT</label>
                            <div>
                                <b>{{$productimage->unit}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">WEIGHT (KGS)</label>
                            <div>
                                <b>{{$productimage->weight}}</b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label" style="color:#666;">DIMENSION(__X__X__CMS)</label>
                            <div>
                                <b>{{$productimage->dimension}}</b>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>  

<!-- Jquery Core Js --> 
<script src="{{url('/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{url('/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{url('/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->

<script src="{{url('/assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{url('/assets/js/pages/charts/jquery-knob.js')}}"></script>  

    </body>
</html>
