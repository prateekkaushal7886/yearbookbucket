




<meta name="csrf-token" content="{{ csrf_token() }}">


<!doctype html>
<html>
<head>
  <title>YB|Profile</title>
  <link rel="icon" href="ind/fav.png" type="image/png" >
  <script type="text/javascript" src="js/intro.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/introjs.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


  <meta name=viewport content='width=700'>

  <script>

   $(document).ready(function(){
     if ($(window).width()<770) {
      (function($){ $('.body').addClass('container-fluid');
        $('#logo_mob').show();

      })(jQuery, undefined); }
      else{$('.body').addClass('container');
      $('.logo_desk').show();}

    });
  </script>

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

  .caption h2{
    text-align: left;
    font-size: 20px;
    color: #fff;
    padding:10px;

  }
  .header{

    background-image: url("2.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  @media only screen and (min-width: 1000px) {
    #capt {
      text-align: right;
      padding-top: 0;
    }
    @media only screen and (min-width: 770px){

    }
    .row{
      margin: 0 !important;
    }

  </style>
</head>
<body>
  @include('navbar2');
  <div class="container-fluid">

    <div>
      <div class="body">
        <div class="header" style="height: 250px;">
          <div class="">

            <div class="row">
              <div class="col l6 m6 s6" style="padding: 23px;"><img class="img-thumbnail" width="180px"; height= "180px";  src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/shot.jpg';}?>" alt=""  id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;"></div>
              <div class="col l6 m6 s6" style=""><h1 style="font-size: 30px; color: #fff;background-color: black;opacity: 0.6;padding: 10px;"><?php echo Auth::user()->name; ?></h1></div>

            </div> 
          </div>
        </div>

        <div class="caption">
          <div class="">
            <div class="row">
              <div class="l6 m6 s6"></div>
              <div class=" m6 s6 l6" >
                <h2 id="capt" >

                  "<?php 
                  if (Auth::user()->view_self&&Auth::user()->view_self!='NULL') {
                    echo Auth::user()->view_self;
                  }else{
                    echo "No Caption Uploaded";
                  }
                  ?>"
                </h2>
              </div>
            </div>
          </div>
        </div>            

        <div class="">
          <div class="row">
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

            <br>

            <div class="container">
              <div class="jumbotron" style="padding: 25px;">
               <p>Here’s what your friends written about you! Your testimonials are displayed below. You can approve or disapprove them by selecting the option shown beside each testimonial. The approved ones shall be a part of your yearbook.</p> 
             </div>

           </div>
           <div class="container-fluid">
            <table class="table-striped col l12 s12 m12">

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
          <script>

          </script>


        </div>    

      </body>
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
    </div>
  </div>
</body>
<br>
<br>

<br>
</html>



