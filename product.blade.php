<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="{{url('/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Custom Css -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{url('/assets/css/main.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/styles3.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/timeline.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/color_skins.css')}}"></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
   function add_more_record_pdf(add,val){
  if(val == 2){
    for(var i=1; i<=5;i++){
    add_incr = i+1;
    add_decr = i-1;
      if(document.getElementById('attributes_value_div_pdf_heading_'+i).style.display == "none"){
        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('attributes_value_div_pdf_heading_'+i).style.display = "block";

        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('cancel_3_'+i).style.display = "block";
        document.getElementById('cancel_3_'+add_decr).style.display = "block";
        return false;
      }
    }
  }
}
function del_more_record_pdf(name,id){
  if(name == 'attributes'){         
      if(document.getElementById('attributes_value_div_pdf_heading_'+id).style.display == "block"){
      decr1 = id-1;
      document.getElementById('master_drawing_data'+id).value="";
      document.getElementById('master_drawing_data_details'+id).value="";
      document.getElementById('master_drawing_data_file'+id).value="";
      document.getElementById('attributes_value_div_pdf_heading_'+id).style.display = "none";
      // document.getElementById('newBox_3_'+decr1).style.display = "none"; 
      document.getElementById('cancel_3_'+decr1).style.display = "block";   
      return false;
    }
  }
}

function add_more_bom_item(add,val){
  if(val == 2){
    for(var i=1; i<=5;i++){
    add_incr = i+1;
    add_decr = i-1;
      if(document.getElementById('attributes_value_div_bom_item_'+i).style.display == "none"){
        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('attributes_value_div_bom_item_'+i).style.display = "block";

        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('cancel_4_'+i).style.display = "block";
        document.getElementById('cancel_4_'+add_decr).style.display = "block";
        return false;
      }
    }
  }
}

function del_more_bom_item(name,id){
  if(name == 'attributes'){         
      if(document.getElementById('attributes_value_div_bom_item_'+id).style.display == "block"){
      decr1 = id-1;
      document.getElementById('bom_item'+id).value="";
      document.getElementById('attributes_value_div_bom_item_'+id).style.display = "none";
      // document.getElementById('newBox_3_'+decr1).style.display = "none"; 
      document.getElementById('cancel_4_'+decr1).style.display = "block";   
      return false;
    }
  }
}

function add_more_vendor(add,val){
  if(val == 2){
    for(var i=1; i<=5;i++){
    add_incr = i+1;
    add_decr = i-1;
      if(document.getElementById('attributes_value_div_vendor_'+i).style.display == "none"){
        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('attributes_value_div_vendor_'+i).style.display = "block";

        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('cancel_5_'+i).style.display = "block";
        document.getElementById('cancel_5_'+add_decr).style.display = "block";
        return false;
      }
    }
  }
}

function del_more_vendor(name,id){
  if(name == 'attributes'){         
      if(document.getElementById('attributes_value_div_vendor_'+id).style.display == "block"){
      decr1 = id-1;
      document.getElementById('vendor'+id).value="";
      document.getElementById('attributes_value_div_vendor_'+id).style.display = "none";
      // document.getElementById('newBox_3_'+decr1).style.display = "none"; 
      document.getElementById('cancel_5_'+decr1).style.display = "block";   
      return false;
    }
  }
}

function add_more_customer(add,val){
  if(val == 2){
    for(var i=1; i<=5;i++){
    add_incr = i+1;
    add_decr = i-1;
      if(document.getElementById('attributes_value_div_customer_'+i).style.display == "none"){
        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('attributes_value_div_customer_'+i).style.display = "block";

        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('cancel_5_'+i).style.display = "block";
        document.getElementById('cancel_5_'+add_decr).style.display = "block";
        return false;
      }
    }
  }
}

function del_more_customer(name,id){
  if(name == 'attributes'){         
      if(document.getElementById('attributes_value_div_customer_'+id).style.display == "block"){
      decr1 = id-1;
      document.getElementById('major_customer'+id).value="";
      document.getElementById('attributes_value_div_customer_'+id).style.display = "none";
      // document.getElementById('newBox_3_'+decr1).style.display = "none"; 
      document.getElementById('cancel_5_'+decr1).style.display = "block";   
      return false;
    }
  }
}
</script>

<body class="theme-blush">
<!-- Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left" style="margin-bottom: -25px;margin-top: -40px;">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <!-- <li><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li> -->
        <!-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">30min ago</span></span>
                                        <span class="message">There are many variations of passages</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">31min ago</span></span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <span class="time">35min ago</span></span>
                                        <span class="message">There are many variations of passages</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <span class="time">35min ago</span></span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum random</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <span class="time">1hr ago</span></span>
                                        <span class="message">There are many variations of passages</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>                        
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li> -->
        <!-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <div class="notify">
                <span class="heartbit"></span>
                <span class="point"></span>
            </div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="header">Department</li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-primary">
                                    <span class="progress-badge">Computer</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>                        
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                        </li>                            
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-info">
                                    <span class="progress-badge">Medical</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="progress-value">45%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-warning">
                                    <span class="progress-badge">Art & Design</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                            <span class="progress-value">29%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                        </li>                            
                                    </ul>
                                </div>
                            </a>
                        </li>                    
                    </ul>
                </li>
                <li class="footer"><a href="javascript:void(0);">View All</a></li>
            </ul>
        </li>
        <li>
            <div class="input-group">                
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </li>         -->
        <li class="float-right">
            
            <a href="{{url('/session/remove')}}" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
    </ul>
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs" style="background-color: rgb(101, 114, 184);">
        <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#dashboard"><i style="color:#fff;" class="zmdi zmdi-home"></i></a></li>
        <!-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#user">Professors</a></li> -->
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu" style="background-color: #6572b8;width: 106%;">
                <ul class="list" style="background-color: #6572b8;width: 106%;">
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
                            <img src="#" style="border-radius:50px;" width="80px" height="50px">
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
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slim_scroll">                                
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>                    
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush" class="active">
                            <div class="blush"></div>                    
                        </li>
                    </ul>                    
                </div>
                <div class="card theme-light-dark">
                    <h6>Left Menu</h6>
                    <button class="t-light btn btn-default btn-simple btn-round">Light Menu</button>
                    <button class="t-dark btn btn-default btn-round">Dark Menu</button>
                    <button class="m_img_btn btn btn-primary btn-round btn-block">Sidebar Image</button>                    
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Report Panel Usage</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>                        
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked="">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Information Summary</h6>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">MEMORY USAGE</small>
                            <h5 class="m-b-0 h6">512</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#00ced1">8,7,9,5,6,4,6,8</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">CPU USAGE</small>
                            <h5 class="m-b-0 h6">90%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#F15F79">6,5,8,2,6,4,6,4</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">DAILY TRAFFIC</small>
                            <h5 class="m-b-0 h6">25 142</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#78b83e">7,5,8,7,4,2,6,5</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">                            
                            <small class="displayblock">DISK USAGE</small>
                            <h5 class="m-b-0 h6">60.10%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#457fca">7,5,2,5,6,7,6,4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <div class="tab-pane right_chat stretchLeft" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <div class="search">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia</span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson</span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">John</span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander</span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
                <div class="card">
                    <h6>Contacts</h6>
                    <ul class="list-unstyled">
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane slideLeft" id="activity">
            <div class="slim_scroll">
                <div class="card user_activity">
                    <h6>Recent Activity</h6>
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Admin Birthday</h5>
                                <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Add New Contact</h5>
                                <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small><strong>E:</strong> maryamamiri@gmail.com</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Code Change</h5>
                                <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">New Email</h5>
                                <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="card">
                    <h6>Recent Attachments</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-pdf l-blush"></i>                    
                                <div class="info">
                                    <h4>info_258.pdf</h4>                    
                                    <small>2MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>newdoc_214.doc</h4>                    
                                    <small>900KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>MG_4145.jpg</h4>                    
                                    <small>5.6MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>MG_4100.jpg</h4>                    
                                    <small>5MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>Reports_end.doc</h4>                    
                                    <small>780KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-videocam l-turquoise"></i>                    
                                <div class="info">
                                    <h4>movie2018.MKV</h4>                    
                                    <small>750MB</small>
                                </div>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Pro. Team</h2></li>
                <li>
                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>                       
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="javascript:void(0);">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Profile
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row clearfix">
           
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">Product List</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Add Products</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0" id="myTable">
                                        <thead>
                                            <tr>                                       
                                                <th>ID</th>
                                                <th>PRODUCT CATEGORY</th>
                                                <th>SUPPL CODE</th>
                                                <th>OEM NAME</th>
                                                <th>DESCRIPTION</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        @php $i=1; @endphp
                                        @foreach($product as $key=>$val)
                                        <tbody>
                                            <!-- <tr>
                                                <td><span class="list-name">{{$i}}</span></td>
                                                <td>{{$val->product_cat}}</td>
                                                <td>{{$val->suppl_code}}</td>
                                                <td>{{$val->oem_name}}</td>
                                                <td>{{$val->description}}</td>
                                                <td><a href="{{url('/edit-product/'.$val->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                                <td><a href="{{url('/delete-product/'.$val->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            </tr> -->
                                        </tbody>
                                        @php $i=$i+1; @endphp
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    <div class="tab-pane body" id="Account">
                       
                <style>
                    .red{
                        color: red;
                    }
                </style>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <!-- <h3 class="mt-5 mb-4">GENERAL MENU</h3> -->
                        <div class="row">
                                 <div class="col-md-12">
                                    <form action="{{url('/insert-product')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                          <div class="card card-primary">
                                            <div class="card-header">
                                              <h6 class="card-title">GENERAL MENU</h6>
                                              <!-- <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#demo">
                                                  <i class="fas fa-minus"></i></button>
                                              </div> -->
                                            </div>
                                            <div class="card-body" id="demo">
                                              <div class="row">
                                                   <div class="col-sm-3">
                                                   <label for="">State Name</label>
                                                        <select class="selectpicker" id="categoryid" name="product_cat" id="categoryid" onchange="CategoriesChange()">
                                                        <option value="">--Select --</option>
                                                           @foreach($state as $key=>$val)
                                                           <option value="{{$val->group_name}}">{{$val->group_name}}</option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group" id="showSubcat1">
                                                        <label for="">SUPPL CODE</label>
                                                        <select class="selectpicker" name="suppl_code" id="showSubcat">
                                                          <option value="">-- Select --</option>
                                                           @foreach($state as $key=>$val)
                                                           <option value="{{$val->id}}">{{$val->group_sno}}</option>
                                                           @endforeach
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">OEM NAME</label>
                                                          <input type="text"  name="oem_name" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('oem_name') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">OEM CODE</label>
                                                          <input type="text"  name="oem_code" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('oem_code') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">DESCRIPTION</label>
                                                          <input type="text"  name="discription" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('discription') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">OES NAME</label>
                                                          <input type="text"  name="oes_name" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('oes_name') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">OES CODE</label>
                                                          <input type="text" name="oes_code" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('oes_code') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">EQUIPMENT CATEGORY</label>
                                                          <input type="text"  name="equip_cat" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('equip_cat') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">EQUIPMENT MODEL</label>
                                                          <input type="text"  name="equip_model" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('equip_model') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">LIST PRICE(INR)</label>
                                                          <input type="text"  name="list_price" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('list_price') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">HSN CODE</label>
                                                          <input type="text"  name="hsn_code" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('hsn_code') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">UOM</label>
                                                          <input type="text"  name="uom" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('uom') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">WEIGHT (KGS)</label>
                                                          <input type="text"  name="weight" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('weight') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-3">
                                                        <div class="form-group">
                                                          <label for="inputName">DIMENSION (__X__X__CMS)</label>
                                                          <input type="text"  name="dimension" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('dimension') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                                  <div class="col-sm-5">
                                                        <div class="form-group">
                                                          <label for="inputName">ITEM IMAGE</label>
                                                          <b style='color:red;'>(MAX SIZE 5MB)</b>
                                                          <input type="file"  name="item_image" class="form-control">
                                                        @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('item_image') }}</div>
                                                        @endif
                                                        </div>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                          <!-- /.card -->

                                          <div class="card card-primary my-3">
                                          <div class="card-header">
                                              <h6 class="card-title">TECHNICAL DETAILS</h6>
                                            </div>
                                                <div class="card-body" id="demo">
                                                  <div class="row">
                                                       <div class="col-sm-6">
                                                            <div class="form-group">
                                                              <label for="inputName">ASSY INSTRUCTIONS</label>
                                                              <input type="text" name="assy_instruction" class="form-control">
                                                              @if (!empty($errors))
                                                                <div style="color:red">{{ $errors->first('package_name') }}</div>
                                                            @endif
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-6">
                                                            <div class="form-group">
                                                              <label for="inputName">LITERATURE</label>
                                                              <input type="text"  name="literature" class="form-control" >
                                                              @if (!empty($errors))
                                                                    <div style="color:red">{{ $errors->first('duration') }}</div>
                                                                @endif
                                                            </div>
                                                       </div>

                                                       <div class="col-sm-3">
                                                            <div class="form-group">
                                                              <label for="inputName">IMAGE 1</label>
                                                                <input type="hidden" name="image1">
                                                              <input type="file" class="form-control" name="image1">
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-3">
                                                            <div class="form-group">
                                                              <label for="inputName">IMAGE 2</label>
                                                                <input type="hidden" name="image2">
                                                              <input type="file" class="form-control" name="image2">
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-3">
                                                            <div class="form-group">
                                                              <label for="inputName">IMAGE 3</label>
                                                                <input type="hidden" name="image3">
                                                              <input type="file" class="form-control" name="image3">
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-3">
                                                            <div class="form-group">
                                                              <label for="inputName">IMAGE 4</label>
                                                                <input type="hidden" name="image4">
                                                              <input type="file" class="form-control" name="image4">
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-12"></div>
                                                  </div>
                                                </div>
                                                <!-- /.card-body -->
                                          </div>
                                          <!-- /.card -->
                                          <div class="card card-primary my-3">
                                          <div class="card-header">
                                              <h6 class="card-title">FEATURES</h6>
                                            </div>
                                                <div class="card-body" id="demo">
                                                  <div class="row">
                                                  <div class="col-sm-6">
                                                            <div class="form-group">
                                                              <label for="inputName">OLD FEATURE</label>
                                                              <textarea class="form-control" name="old_feature"></textarea>
                                                              @if (!empty($errors))
                                                                <div style="color:red">{{ $errors->first('old_feature') }}</div>
                                                            @endif
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-6">
                                                            <div class="form-group">
                                                              <label for="inputName">NEW FEATURE</label>
                                                              <textarea class="form-control" name="new_feature"></textarea>
                                                              @if (!empty($errors))
                                                                <div style="color:red">{{ $errors->first('new_feature') }}</div>
                                                            @endif
                                                            </div>
                                                       </div>

                                                       <div class="col-sm-12">
                                                            <div class="form-group">
                                                              <label for="inputName">REMARKS</label>
                                                              <textarea class="form-control" name="remarks"></textarea>
                                                              @if (!empty($errors))
                                                                <div style="color:red">{{ $errors->first('remarks') }}</div>
                                                            @endif
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-12"></div>
                                                  </div>
                                                </div>
                                                <!-- /.card-body -->
                                          </div>

<!-- ************************************************************************************************************************************ -->
                                          <div class="card card-primary my-3">
                                             <div class="card-body" id="demo">
                                                <div>
                                                       <div class="col-sm-12"> 
                                                           <h6>DRAWING-(MASTER DRAWING DATA)</h6>
                                                       </div>
                                                       <?php for($j=1;$j<=5;$j++){ ?>
                                                        <div class="row">
                                                       <div class="col-md-12" id="attributes_value_div_pdf_heading_<?=$j?>" <?php if($j==1)
                                                        { echo 'style="display:block;"'; }else{ ?>style="display:none;" <?php } ?>>
                                                        <div class="row">

                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                          <label for="inputName">HEAD</label>
                                                            <input type="text" class="form-control" name="master_drawing_data<?=$j?>" id="master_drawing_data<?=$j?>" placeholder="eg. head" multiple>
                                                        </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                          <label for="inputName">DETAILS</label>
                                                            <input type="text" class="form-control" name="master_drawing_data_details<?=$j?>" id="master_drawing_data_details<?=$j?>" placeholder="eg. details" multiple>
                                                        </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                          <label for="inputName">IMAGE UPLOAD</label>
                                                            <input type="file" class="form-control" name="master_drawing_data_file<?=$j?>" id="master_drawing_data_file<?=$j?>" multiple>
                                                        </div>
                                                        </div>
                                                       
                                                       
                                                    <div class="col-md-2">
                                                      <div id="newBox_3_<?=$j?>" <?php if($j!=1){ echo"style='display:none;'";} ?>>
                                                        <div class="form-group">
                                                          <button type="button" class="btn btnprimary" style='margin-top:30px;' name="add-more-form" onclick="return add_more_record_pdf('<?=$j?>',2);" id="add-more-form" >+ Add More</button>
                                                      </div>
                                                    </div>
                                                     
                                                    <?php if($j!=1){ ?>
                                                        <div class="col-sm-4" id="cancel_3_<?=$j?>" style="display:block;">
                                                        <button type="button" onclick="return del_more_record_pdf('attributes','<?=$j?>');" class="btn btn-danger mt-4 d-inline-block">
                                                         Remove
                                                        </button>
                                                        </div>            
                                                    <?php }?>
                                                    </div>
                                                     </div>
                                                     </div>
                                                  </div>
                                                <?php }?>
                                                
                                             </div>
                                          </div>
                                         
                                          <!-- ************************************************************************************************************************************ -->
                                          <!-- card -->
                                          <div class="card card-primary my-3">
                                             <div class="card-body" id="demo">
                                                <div id="showitinerary">
                                                  <div class="row">
                                                       <div class="col-sm-12"> 
                                                           <h6>-(CROSS REFRENCE)</h6>
                                                       </div>
                                                       <div class="col-sm-6">
                                                           <div class="form-group">
                                                          <label for="inputName">ALIAS</label>
                                                          <input type="text" name="alias" class="form-control">
                                                          @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('alias') }}</div>
                                                        @endif
                                                        </div>
                                                       </div>
                                                       <div class="col-sm-6">
                                                           <div class="form-group">
                                                          <label for="inputName">ALIAS1</label>
                                                          <input type="text" name="alias1" class="form-control">
                                                          @if (!empty($errors))
                                                            <div style="color:red">{{ $errors->first('alias1') }}</div>
                                                        @endif
                                                        </div>
                                                       </div>
                                                       <div class="col-sm-6 offset-6">
                                                    </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
<!-- *********************************************************************************************************************************************** -->
                                          <div class="card card-primary my-3">
                                             <div class="card-body" id="demo">
                                                  <div class="row">
                                                       <div class="col-sm-12"> 
                                                           <h6>MAJOR-(BOM ITEM)</h6>
                                                       </div>
                                                       <?php for($j=1;$j<=5;$j++){ ?>

                                                       <div class="col-md-12" id="attributes_value_div_bom_item_<?=$j?>" <?php if($j==1)
                                                        { echo 'style="display:block;"'; }else{ ?>style="display:none;" <?php } ?>>
                                                      <div class="row">
                                                       <div class="col-sm-8">
                                                        <div class="form-group">
                                                          <select class="selectpicker" name="bom_item<?=$j?>" id="bom_item<?=$j?>" multiple>
                                                            <option value="">--Select --</option>
                                                            <option value="ALL">ALL</option>
                                                            </select>
                                                        </div>
                                                        </div>

                                                       <div class="col-sm-3">
                                                       <div id="newBox_3_<?=$j?>" <?php if($j!=1){ echo"style='display:none;'";} ?>>
                                                        <div class="form-group">
                                                       <button type="button" class="btn btn-primary" onclick="return add_more_bom_item('<?=$j?>',2);" style="margin-top:-2px;" name="add-more-bom-item" id="add-more-bom-item">+ Add More</button>
                                                      </div>
                                                      </div>
                                                      <?php if($j!=1){ ?>
                                                        <div class="col-sm-4" id="cancel_4_<?=$j?>" style="display:block;">
                                                        <button type="button" onclick="return del_more_bom_item('attributes','<?=$j?>');" class="btn btn-danger mt-0 d-inline-block">
                                                         Remove
                                                        </button>
                                                      </div>            
                                                    <?php }?>
                                                      </div>
                                                      </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>  
                                             </div>
                                          </div>
<!-- *********************************************************************************************************************************************** -->
                                          <div class="card card-primary my-3">
                                             <div class="card-body" id="demo">
                                                  <div class="row">
                                                       <div class="col-sm-12"> 
                                                           <h6>VENDOR DETAILS-(VENDOR)</h6>
                                                       </div>
                                                       <?php for($j=1;$j<=5;$j++){ ?>

                                                       <div class="col-md-12" id="attributes_value_div_vendor_<?=$j?>" <?php if($j==1)
                                                        { echo 'style="display:block;"'; }else{ ?>style="display:none;" <?php } ?>>
                                                      <div class="row">
                                                       <div class="col-sm-8">
                                                        <div class="form-group">
                                                          <input type="text" class="form-control" name="vendor<?=$j?>" id="vendor<?=$j?>" multiple>
                                                        </div>
                                                        </div>

                                                       <div class="col-sm-3">
                                                       <div id="newBox_3_<?=$j?>" <?php if($j!=1){ echo"style='display:none;'";} ?>>
                                                        <div class="form-group">
                                                       <button type="button" class="btn btn-primary" onclick="return add_more_vendor('<?=$j?>',2);" style="margin-top:-2px;" name="add-more-bom-item" id="add-more-bom-item">+ Add More</button>
                                                      </div>
                                                      </div>
                                                      <?php if($j!=1){ ?>
                                                        <div class="col-sm-4" id="cancel_5_<?=$j?>" style="display:block;">
                                                        <button type="button" onclick="return del_more_vendor('attributes','<?=$j?>');" class="btn btn-danger mt-0 d-inline-block">
                                                         Remove
                                                        </button>
                                                      </div>            
                                                    <?php }?>
                                                      </div>
                                                      </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>  
                                             </div>
                                          </div>
<!-- *********************************************************************************************************************************************** -->
                                          <div class="card card-primary my-3">
                                             <div class="card-body" id="demo">
                                                  <div class="row">
                                                       <div class="col-sm-12"> 
                                                           <h6>CUSTOMER DATA-(MAJOR CUSTOMER)</h6>
                                                       </div>
                                                       <?php for($j=1;$j<=5;$j++){ ?>

                                                       <div class="col-md-12" id="attributes_value_div_customer_<?=$j?>" <?php if($j==1)
                                                        { echo 'style="display:block;"'; }else{ ?>style="display:none;" <?php } ?>>
                                                      <div class="row">
                                                      <div class="form-group">
                                                      <div class="col-sm-12"> 

                                                          <select class="selectpicker" name="major_customer<?=$j?>" id="major_customer<?=$j?>" multiple>
                                                            <option value="">--Select --</option>
                                                            <option value="ALL">ALL</option>
                                                            <option value="Bengal Beverages">Bengal Beverages</option>
                                                            <option value="CCIL">CCIL</option>
                                                            <option value="Container Corp. India ltd.">Container Corp. India ltd.</option>
                                                            <option value="DANFOSS">DANFOSS</option>
                                                            <option value="DCM Shriram">DCM Shriram</option>
                                                            <option value="Globe-HiFab">Globe-HiFab</option>
                                                            <option value="Liftmac">Liftmac</option>
                                                            <option value="NCL">NCL</option>
                                                            <option value="Precision Hyd.">Precision Hyd.</option>
                                                            <option value="VMT">VMT</option>
                                                            </select>
                                                        </div>
                                                        </div>

                                                       <div class="col-sm-3">
                                                       <div id="newBox_3_<?=$j?>" <?php if($j!=1){ echo"style='display:none;'";} ?>>
                                                        <div class="form-group">
                                                       <button type="button" style="margin-top: 10px;"class="btn btn-primary" onclick="return add_more_customer('<?=$j?>',2);" style="margin-top:-2px;" name="add-more-bom-item" id="add-more-bom-item">+ Add More</button>
                                                      </div>
                                                      </div>
                                                      <?php if($j!=1){ ?>
                                                        <div class="col-sm-4" id="cancel_6_<?=$j?>" style="display:block;">
                                                        <button type="button" onclick="return del_more_customer('attributes','<?=$j?>');" class="btn btn-danger mt-0 d-inline-block">
                                                         Remove
                                                        </button>
                                                      </div>            
                                                    <?php }?>
                                                      </div>
                                                      </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>  
                                             </div>
                                          </div>
<!-- *********************************************************************************************************************************************** -->
                                          
                                          <div class="card card-primary my-3">
                                            
                                          <div class="col-sm-12">                          
                                                  <div class="form-group">
                                                      <input type="submit" name="submit" value="Submit" class="btn btn-success float-right">
                                                  </div>
                                                </div>
                                                <br>
                                            </div>
<!-- *********************************************************************************************************************************************** -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="{{url('/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{url('/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{url('/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->

<script src="{{url('/assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{url('/assets/js/pages/charts/jquery-knob.js')}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" ></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$( document ).ready(function() {
    initTable();
});
</script>


<script>
 function CategoriesChange(){  
  var categoryid = document.getElementById("categoryid").value;
    $.ajax
      ({
        type:'POST',
        url: "{{url('/subCategoryResult')}}",
        data:{
          product_cat:categoryid,
          _token: "{{ csrf_token()}}"
        },
        success:function(response) {          
         //alert(response);
          $("#showSubcat1").html(response); 
          }
      });
   }
   CategoriesChange();
</script>

<script>
    function initTable(){
        var table =$('#myTable').DataTable({
    pageLength: 10,
    paging:true,
    //autoWidth: false,
    responsive: true,
    dom: 'Bfrtip',
    buttons: [
        {extend: 'excel', title: 'ExampleFile', className: 'btn btn-primary btn-sm'},
        {extend: 'copy', title: 'ExampleFile', className: 'btn btn-warning btn-sm'},
        {extend: 'print',
            customize: function (win){
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');

                $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            },
            className: 'btn btn-success btn-sm'
        }
    ],
    /*buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ],*/
    
    //order: [[ 2, 'asc' ]],
    processing: true,
    serverSide: true,
    ajax: {
        type: 'POST',
        url:"{{url('/search-product')}}",
        dataType: "json",
        data:{
          _token: "{{ csrf_token()}}"
        },
        complete: function(response) {
            console.log(response.responseJSON.data);
        }
    },
    columns: [
        { data: "id","searchable": false, "orderable": false, "visible": true },
        { data: "product_cat", "orderable": false, "visible": true },
        { data: "suppl_code", "orderable": false, "visible": true },
        { data: "oem_name", "orderable": false, "visible": true },
        { data: "description", "orderable": false, "visible": true },
        { data: "edit_btn", "orderable": false, "visible": true },
        // { data: "del_btn", "orderable": false, "visible": true },
    ],
    
});
}

</script>

<script>
    ////////////////////excluded/////////
    var rowIdxexcluded = 0;
    $('#addBtnexcluded').on('click', function () {

    // Adding a row inside the tbody. 
    $('#showexcluded').append(`<div class="row rowremove" id="R${++rowIdxexcluded}">
                                   
            <div class="col-sm-8">
                <div class="form-group">
                <input id="inputName" name="excluded_point[]" class="form-control" placeholder="">
            </div>
            </div>
            <div class="col-sm-2">
            <div class="form-group">
                 <a href="javascript:void(0)" id="removeBtnexcluded" class=" red remove">Delete</a>
            </div>
        </div>
    </div>`);
  });
    /////////////////////////////////included///////////////////
    var rowIdxincluded = 0;
    $('#addBtnincluded').on('click', function () {

    // Adding a row inside the tbody. 
    $('#showincluded').append(`<div class="row rowremove" id="R${++rowIdxincluded}">
           <div class="col-sm-8">
               <div class="form-group">
              <input id="inputName" class="form-control" placeholder="" name="included_point[]">
            </div>
           </div>

           <div class="col-sm-2">
            <div class="form-group">
                 <a href="javascript:void(0)" id='removeBtnincluded' class="admore red remove">Delete</a>
            </div>
        </div>

    </div>`);
  });

/////////////////////////////////////////////////////Itinerary///////
    var rowIdxitinerary = 0;
    var i = 0;
    $('#addBtnitinerary').on('click', function () {
        
    // Adding a row inside the tbody. 
    $('#showitinerary').append(`<div class="row rowremove" id="R${++rowIdxitinerary}">
                                  
               <div class="col-sm-5">
                   <div class="form-group">
                  <label for="inputName">Day No.</label>
                  <input type="number" name="day_no[]" class="form-control" placeholder="eg. day1">
                </div>
               </div>
               
               <div class="col-sm-5">
                    <div class="form-group">
                      <label for="inputName">Image 1</label>
                      <input type="file" class="form-control" name="itinerary_image1[]" id="itinerary_image1" multiple>
                    </div>
               </div>

               <div class="col-sm-2">
                <div class="form-group">
                <a href="javascript:void(0)" class="btn-red remove">Delete</a>
                </div>
                </div>
        </div>`);
    
  });

///////////////////////////////////delete//////////////////
$('#showitinerary').on('click', '.remove', function () {
   
    $(this).closest('.rowremove').remove();

    // Decreasing the total number of rows by 1. 
    rowIdxitinerary--;
});
/////////////////////////
$('#showexcluded').on('click', '.remove', function () {
   
    // Removing the current row. 
    $(this).closest('.rowremove').remove();

    // Decreasing the total number of rows by 1. 
    rowIdxexcluded--;
});
////////////////////////////////////////////////////
$('#showincluded').on('click', '.remove', function () {   
    // Removing the current row. 
    $(this).closest('.rowremove').remove();

    // Decreasing the total number of rows by 1. 
    rowIdxincluded--;
});
</script>

<script type="text/javascript">

    function categorycheck(sel){

    let id = sel.options[sel.selectedIndex].value;
     ///alert(id);
    $.ajax({
      url: "{{url('admin/get-category')}}",
      method: 'POST',
      data: {
        id:id, _token: "{{csrf_token()}}",
      },
      success: function (datas) {
        console.log(datas);
        $('#subcategory').empty();
        var o = new Option("--Select--", "")
        $('#subcategory').append(o);
        datas.forEach(function (row) {
          let o = new Option(row.name, row.id);
          $('#subcategory').append(o);

        });
      }
    });
}

</script>
<script type="text/javascript">
  function DeleteItinerary(id){
    if(id!=''){
        $.ajax({
        type:'post',
        url:'{{url("admin/packageitinerary/itinerary")}}/'+id,
        data:{
          ajaxis:2,
          _token: "{{csrf_token()}}"
        },
        success:function(data){
            location.reload();
         }
        });
    }

  }
  function DeleteIncluded(id){
    if(id!=''){
        $.ajax({
        type:'post',
        url:'{{url("admin/packageincluded/included")}}/'+id,
        data:{
          ajaxis:2,
          _token: "{{csrf_token()}}"
        },
        success:function(data){
            location.reload();
         }
        });
    }
  }
  function DeleteExluded(id){
    if(id!=''){
        $.ajax({
        type:'get',
        url:'{{url("admin/packageexluded/exluded")}}/'+id,
        data:{
          ajaxis:2,
          _token: "{{csrf_token()}}"
        },
        success:function(data){
            location.reload();
         }
        });
    }
  }
</script>

    @if(session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
    @endif
</body>
</html>