<!DOCTYPE html>
<html>
  <!-- Bootstrap CSS -->
  
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="background-color:rgb(101, 114, 184);margin-top:0px;padding: 5px;">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/search-details/')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>GENERAL MENU</b><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/technical-detail/')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>TECHNICAL DETAILS</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/cross-reference')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>CROSS REFERENCE</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/features')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>FEATURES</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/vendor-details')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>VENDOR DETAILS</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/customer-data')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>CUSTOMER DATA</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/drawing')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>DRAWING</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/boms')}}/{{$product->id}}" style="color:#fff;font-size:13px;"><b>BOM</b></a>
              </li>
              <li class="nav-item">
              
              <button type="submit" style="font-size:17px;border-radius:15px;background-color: rgb(101, 114, 184);border: none;"><a href="{{url('/edit-product-detail')}}/{{$product->id}}" class="nav-link" style="color:#fff;">UPDATE</a></button>
                <!-- <a class="nav-link" href="#" style="color:#fff;font-size:13px;"><b>UPDATE</b></a> -->
              </li>
            </ul>
          </div>
        </nav>
        <style>
        .modal-header{
           background: rgb(101, 114, 184);
           color: #fff;
        }
    </style>
  </head>

  <body>
<div class="container">
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Contact Us</button> -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" style="width:100% !important;">
                    <form action="">
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6">
                            <label class="form-label">PRODUCT CATEGORY</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label">SIPPL_CODE</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">OEM NAME</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">OEM CODE</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">OES NAME</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">OES CODE</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">DESCRIPTION</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">EQUIPMENT CATEGORY</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">EQUIPMENT MODEL</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">HSN CODE</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">UNIT OF MEASUREMENT</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">WEIGHT(KGS)</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">DIMENSION(--X--X--CMS)</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">LIST PRICE</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="container">
                        <div class="col-sm-6" style="margin-top: 35px;">
                            <label class="form-label">ITEM IMAGE</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="col-sm-4" style="margin-top: 35px;">
                            <label class="form-label"></label>
                            <button class="btn btn-danger">DELETE</button>
                          </div>
                        </div>
                      </div>
                         
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- navbar ends -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



    <title>Mascot IT Solutions</title>
    

    

