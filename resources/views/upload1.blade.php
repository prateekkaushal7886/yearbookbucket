<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Upload</title>

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" type="text/css" href="../css/animate.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
  <script src="js/autocomplete.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.3/cropper.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.3/cropper.js"></script>
  <style type="text/css">
  
  .dropdown-menu{
    top: 60px;
    right: 0px;
    left: unset;
    width: 460px;
    box-shadow: 0px 5px 7px -1px #c1c1c1;
    padding-bottom: 0px;
    padding: 0px;
  }
  .dropdown-menu:before{
    content: "";
    position: absolute;
    top: -20px;
    right: 12px;
    border:10px solid #343A40;
    border-color: transparent transparent #343A40 transparent;
  }
  .head{
    padding:5px 15px;
    border-radius: 3px 3px 0px 0px;
  }
  .notification-box{
    padding: 10px 0px; 
  }
  .bg-gray{
    background-color: #eee;
  }
  @media (max-width: 640px) {
    .dropdown-menu{
      top: 50px;
      left: -16px;  
      width: 290px;
    } 
    .nav{
      display: block;
    }
    .nav .nav-item,.nav .nav-item a{
      padding-left: 0px;
    }
    .message{
      font-size: 13px;
    }
  }
  .cta .cta-inner:before
  {
    content: none;
  }
  </style>
</head>

<body>

  <div id="bootstrap-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Selected image : </h4>
        </div>
        <div class="modal-body">
         <div id="image-preview-div" style="display: none">
          <img id="preview-img" src="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Navigation--> 
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="background-color: rgba(67,100,107,0.55);">
  <a class="navbar-brand text-light" href="http://www.sac.iitkgp.ac.in"><img height="90" width="250" src="sac.png" alt="someimg"/></a>
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="http://www.sac.iitkgp.ac.in">Yearbook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-6">

          <form action="search/" method="POST" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group" >
              <input type="text" name="search" required="required" id="search" class="form-control" placeholder="Search your friend here">
            </div>
            <div class="form-group" style="margin-left: 8px;">
              <button type="submit" class="btn btn-default" style="margin-top: 0px;">Search</button>
            </div>
          </form>
        </li>
        <li class="nav-item px-lg-3">
          <a class="nav-link text-uppercase text-expanded" href="/home">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-lg-3">
          <a class="nav-link text-uppercase text-expanded" href="/trending">Trending</a>
        </li>
        <li class="nav-item px-lg-3">
          <a class="nav-link text-uppercase text-expanded" href="/profile_index">{{Auth::user()->name}}</a>
        </li>
        <li class="nav-item px-lg-3 dropdown">
          <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-cog"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right" >
            <li class="head text-dark bg-light">
              <a class="nav-link text-dark" href="/details">Edit Details</a>
            </li>
            <li class="head text-dark bg-light">
              <a class="nav-link text-dark" href="#">Change Password </a>
            </li>
            <li class="head text-dark bg-light">
              <a class="nav-link text-dark" href="/logout">Logout </a>
            </li>

          </ul>
        </li>
        <li class="nav-item px-lg-3 dropdown">
          <a class="nav-link text-light" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >

            @if(count($notifications))
            <i class="fa fa-bell" style="color: blue;">
              <span lass="badge" style="position: relative; top: 6px; left: -6px;color: white; font-size: 19px;">{{count($notifications)}}</span>
            </i>
            @else
            <i class="fa fa-bell"></i>
            @endif

          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li class="head text-light bg-dark">
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                  <span>Notifications ({{count($notifications)}})</span>

                </div>
              </li>
              @foreach($notifications as $notification)
              <a href="/read/{{$notification['id']}}">
                <li class="notification-box">
                  <div class="row">
                    @php
                    $pic = App\User::where('name',$notification['user'])->pluck('pro_pic');
                    @endphp  
                    <div class="col-lg-3 col-sm-3 col-3 text-center">
                      <img src="../{{$pic[0]}}" class="w-50 rounded-circle">
                    </div> 
                    <div class="col-lg-8 col-sm-8 col-8">
                      <strong class="text-info">{{$notification['user']}}</strong>
                      <div>
                        {{$notification['views']}}
                      </div>
                      <small class="text-warning">{{$notification['created_at']}}</small>
                    </div>    
                  </div>
                </li>
              </a>
              @endforeach           
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="page-section cta" style="background-color: rgba(106,106,65,0.55);">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper"></span>
              <span class="section-heading-lower">Upload Photos</span>
            </h2>
            <p class="mb-0">What better way to capture a memory than printing it in your yearbook? Share with us the pictures of your most memorable times at KGP and we’ll make it a part of your memoir. Select the category for your picture/s and upload them using the option below.</p>
            <br>
          
          <br>
          <form id="upload-image-form" action="/upload" method="post" enctype="multipart/form-data">
            <input id="signup-token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="classifiers">Select Category: (Max size: 5MB)</label>
              <select class="form-control" name="classifier" >
                <option value="dep">DEPARTMENT PHOTOS</option>
                <option value="hall">HALL PHOTOS</option>
                <option value="fest">FEST PHOTOS</option>
                <option value="misc">OTHER MOMENTS AT KGP</option>
              </select>
            </div>
            <div id="cropp-image-div" style="display: none">
              <img id="crop-image" src="" class="img-thumbnail">
              <div class="form-group">
                <label for="caption">Caption:</label>
                <textarea class="form-control" rows="2" cols="15" name="caption" id="caption" required="required"></textarea>
              </div> 
            </div>
            <div class="form-group">
              <input type="file" name="image" id="image" accept="image/*" required>
            </div>
            <button class="btn btn-lg btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
          </form>
          <br>
          <div class="alert alert-info" id="loading" style="display: none;" role="alert">
            Uploading image...
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>



@include('gallery3')


  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2018</p>
    </div>
  </footer>
</body>


<script type="text/javascript">
 /*jslint browser: true, white: true, eqeq: true, plusplus: true, sloppy: true, vars: true*/
 /*global $, console, alert, FormData, FileReader*/
 function selectImage(e) {
  $('#file').css("color", "green");
  console.log("selectImage called"); 
  $('#bootstrap-modal').modal('show');
  $("#bootstrap-modal").on("shown.bs.modal", function() {
    $('#image-preview-div').css("display", "block");
    $('#preview-img').attr('src', e.target.result);
    $('#preview-img').css('width', '200px');
    $('#preview-img').css('height', '400px');
    console.log("modal opened");
    $('#preview-img').cropper({
      viewMode : 1,
      preview : '.preview',
      crop : function(e) {

      }
    });
  }).on("hidden.bs.modal", function() {
    originalData = $("#preview-img").cropper("getCroppedCanvas");
    var originalPng = originalData.toDataURL("image/png");
    console.log(originalData);
    $("#preview-img").cropper("destroy");
    $('#cropp-image-div').css("display", "block");
    $('#crop-image').attr('src', originalPng);
    $('#crop-image').css('max-width', '200px');
  });
}
$(document).ready(function (e) {
  $('form#upload-image-form').on('submit', function(e) {
    e.preventDefault();
    $('#message').empty();
    $('#loading').show();
    console.log(originalData);
    var formdata = new FormData(this); 
    var i=0;
    for (var value of formdata.entries()) {
      console.log("before",value[i]);
      i++;
    }
    i=0;
    originalData.toBlob(function (blob){
     formdata.append('croppedImage',blob);
     for (var value of formdata.entries()) {
       console.log("after",value[i]);
       i++; 
     }
     console.log("crop image",originalData);
     $.ajax({
      url: "/upload",
      type: "POST",
      data: formdata,
      contentType: false,
      cache: false,
      processData: false,
      success: function(response)
      {
        alert('Your pic has been succesfully added.');
        $('#loading').hide();
        $('#cropp-image-div').css("display", "none");
        var $el = $('#image');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        console.log(response);
       // document.getElementById('posts').innerHTML += response;
       location.reload();
     },
     error: function(data)
     {
      alert("Sorry, there was an error uploading image");
      console.log("error",data);
      window.location.reload();
    }
  });

   });
  });
  $('#image').change(function() {
    $('#upload-button').removeAttr("disabled");
    var reader = new FileReader();
    reader.onload = selectImage;
    reader.readAsDataURL(this.files[0]);
  });
});
</script>