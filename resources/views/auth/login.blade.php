<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Yearbook</title>
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/css/animate.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Raleway:300'>

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

   <div class="container-fluid">




  <h1><small>

   <h3 class="center main-title animated zoomIn">
    <div class="clock-wrap">
  <div class="clock">
    <div class="clock__date">
    </div>
    <div class="clock__time">
    </div>
  </div>
</div>
<div class="clock-toogle">
  <div class="clock-toogle__toogle"></div>
</div>           
<br>
Welcome to<b> Yearbook'17</b> Portal </h3>

   <form method="post" action="{{ route('login') }}" class="form main-title center">

                {{ csrf_field() }}

                <div class="row" style="margin-bottom: 0px;"> <br> <br> 

                    <div class="input-field col s12 l6 m12 " >                   
                        <input name="rollno" id="rollno" autofocus placeholder="Roll Number" type="text" style="margin-top: 5px;" required>
                        <label for="rollno"><h5 style="font-size: 140%;  color: #004d33;">Roll Number (14THXXXXX)</h5></label>
                    </div>
                    <div class="input-field col s12 l6 m12 ">                   
                        <input name="password" id="dob" placeholder="Date of Birth" pattern="\d{1,2}-\d{1,2}-\d{4}" type="text" style="margin-top: 5px;" required>
                        <label for="dob"><h5 style="font-size: 140%; color: #004d33;">Date of Birth (dd-mm-yyyy)</h5></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l4 m12 offset-l4">
                        <button type="submit" id="submit" name="submit" class="waves-effect waves-light btn" style="font-size: 15px;" required >Submit</button>
                    </div>
                </div>
            </form>

            <p class=" center sub-title main-title" >Contact us at:<br> <a href="mailto:yearbook2k17.kgp@gmail.com"> yearbook2k17.kgp@gmail.com<a><i class="material-icons">error_outline</i><span class="tooltip">If you are not graduating this year, but want to write about your friends who are graduating, send us the testimonials via mail at yearbook2k17.kgp@gmail.com</span></a></p>

            </small></h1>
  </div>

<!-- You can add more ".slideshow-image" elements, but remember to update the "$items" variable on SCSS -->
<div class="slideshow">
  <div class="slideshow-image" style="background-image: url('screen.png')"></div>
  <div class="slideshow-image" style="background-image: url('12.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('2.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('back.jpg')"></div>
</div>
  



</body>

</html>
