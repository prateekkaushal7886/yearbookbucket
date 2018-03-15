<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="icon" href="ind/fav.png" type="image/png" >
  <meta charset="utf-8">
  <title>YB|Upload</title>
  <meta name="description" content="Photo uploader for Yearbook 2016, IIT Kharagpur. Designed and maintained by Students' Alumni Cell IIT Kharagpur.">
  <style>
  @font-face {
    font-family: 'Century gothic';
    src: url('font.ttf');
  }
  body
  {
    background-color: #333;
    background-repeat:repeat;
    padding-top: 0;

  }
  .container
  {font-family: Century gothic;
    background-color: silver;
    color: #333;
  }
  .preview {
    overflow: hidden;
    width: 200px; 
    height: 300px;
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
          <img id="preview-img" src="noimage">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
@include('navbar2')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.3/cropper.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.3/cropper.js"></script>
<br>
<div class="container animated zoomInLeft ">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12" align="center">
      <h2 style="color:#707070;">Upload Photos</h2>
    </div>
  </div>
  <div class="row" align="center" style="padding: 30px;">
    <h4>What better way to capture a memory than printing it in your yearbook? Share with us the pictures of your most memorable times at KGP and we’ll make it a part of your memoir. Select the category for your picture/s and upload them using the option below.</h4>
  </div>
  <div class="container-fluid">
    <div style="max-width: 650px; margin: auto;">
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
        <img id="crop-image" src="noimage" class="img-thumbnail">
        <div class="form-group">
          <label for="caption">Caption:</label>
          <textarea class="form-control" rows="2" cols="15" name="caption" id="caption"></textarea>
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
    <div id="message"></div>
  </div>
</div>
</div>
<br>
@include('gallery1')
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
          document.getElementById('posts').innerHTML += response;
          window.location.reload();
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
</html>