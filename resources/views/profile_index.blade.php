<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
</style>

   
  <style type="text/css">
  @font-face {
    font-family: 'Century gothic';
    src: url('font.ttf');
  }
  #modal1{
    overflow: hidden;
  }

  table{
    table-layout: fixed;
  }
  .btn{
    width: 180px;
  }
  body{

    font-family: Century gothic;
  }
  .caption{
    margin-top: -40px;
    background-color: #26a69a;
  }
</style>

    <link rel="stylesheet" type="text/css" href="../css/animate.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
  <script src="js/autocomplete.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation--> 
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="background-color: rgba(67,100,107,0.55);">
    <a class="navbar-brand text-light" href="http://www.sac.iitkgp.ac.in"></a>
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
          <li class="nav-item active px-lg-3">
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
  
    
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            
            <div class="col-xl-9 col-lg-10 mx-auto">

              <div class="bg-faded rounded p-5">
                            <div class="row">
              <div class="col l6 m6 s6" style="padding: 23px;margin-left: 30%;margin-top: -20%;"><img class="img-thumbnail" width="180px"; height= "180px";  src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/shot.jpg';}?>" alt=""  id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;"></div>
              

            </div> 
          
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper"> "<?php 
                  if (Auth::user()->view_self&&Auth::user()->view_self!='NULL') {
                    echo Auth::user()->view_self;
                  }else{
                    echo "No Caption Uploaded";
                  }
                  ?>"</span>
                  <span class="section-heading-lower"><?php echo Auth::user()->name; ?></span>
                </h2>
                 <div class="">
          <div class="row" style=" color: #fff;background-color: black;opacity: 0.6;padding: 10px;">
            <div class="col l3 m3 s3 center">
              <h6 style="font-weight:bolder" >Roll No.</h6>
              <h6><?php echo Auth::user()->rollno; ?></h6>
            </div>
            <div class="col l3 m3 s3 center">
              <h6 style="font-weight:bolder">Hall</h6>
              <h6><?php echo Auth::user()->HOR; ?></h6>
            </div>
            <div class="col l3 m3 s3 center">

              <h6 style="font-weight:bolder">Email</h6>
              <h6>
                <?php 
                if (Auth::user()->email) {
                  echo Auth::user()->email;
                }else{
                  echo "No Email Provided";
                }
                ?></h6>
              </div>

              <div class="col l3 m3 s3 center">
                <h6 style="font-weight:bolder">Department</h6>
                <h6>
                  <?php 
                  if (Auth::user()->department) {
                    echo Auth::user()->department;
                  }else{
                    echo "No Data";
                  }
                  ?></h6>
                </div>

              </div>
            </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>
  
 <section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">TESTIMONIALS</span>
              </h2>
              <p class="mb-0"> Here’s what your friends written about you! Your testimonials are displayed below. You can approve or disapprove them by selecting the option shown beside each testimonial. The approved ones shall be a part of your yearbook.</p>
              <br>
            
            
        
            <table class="table-striped col l12 s12 m12" style="background-color: rgba(255,255,255,1);font-size: 110%;">

              <tbody>
                <?php

                $dept = Auth::user()->department;
                $rollno = Auth::user()->rollno;
                $j=0;
                $i=0;

                foreach($myviews as $view)
                {
                  $id=$view['id'];

                  echo '<tr class="row"><td style = "word-wrap: break-word;padding:20px; " class="col l9"> <b>'.$view['user'].' said:</b><br>
                  '.$view["views"].'
                  </td>
                  <td class="col l3"><div class="approval" style="padding:20px">'; 


                  if($view['approval']=='1'){

                    echo '<button type="button" class="btn btn-danger disapprove app'.$i.'"  data-no="'.$i.'" data-id="'.json_encode($id).'" id= "'.json_encode($id).'" >Disapprove</button>';
                  }else{


                    echo '<button type="button" class="btn btn-success approve app'.$i.'"  data-no="'.json_encode($i).'" data-id="'.json_encode($id).'" id= "'.json_encode($rollno).'" );">Approve</button> <div class="text_show'.$i.'" style= "padding-left = 15px;"></div>';
                  }

                  echo '</div></td>';

                  $j=1;
                }         
                if($j==0)
                {

                  echo "<h5>No Testimonials Given</h5>";
                }
                ?>
              </tbody>
            </table>
         
          </div>
          </div>
        </div>

      </div>
   
 </section>
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<script type="text/javascript">

        function call($id)
        {
          alert($id);
        }
        $('.approve').click('.approve', function(){


          var rollno = $(this).attr('id');
          var no = $(this).attr('data-no');
          var id = $(this).attr('data-id');
          var query= id;

          window.location="/approve/"+id;

        }); 
        $('.disapprove').click('.disapprove',function(){

          var rollno = $(this).attr('id');
          var no = $(this).attr('data-no');
          var id = $(this).attr('data-id');

          var query= '1';

          window.location="/disapprove/"+id;

        }); 


      </script>
      <script type="text/javascript">
              var user = <?php echo $user;?>;
    //console.log(user[0].name);
    var names = [];
    for (var i = 0; i < user.length; i++) {
      names[i] = user[i].name;
    }
    //console.log('names',names);
    
    $(function() {
      $("#search").autocomplete({
        source:[names]
      }); 
    });
  </script>