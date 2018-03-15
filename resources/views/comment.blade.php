




<meta name="csrf-token" content="{{ csrf_token() }}">


<!doctype html>
<html>
  <head>
    <title>YB|Profile</title>
    <link rel="icon" href="../ind/fav.png" type="image/png" >
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="myself2.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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

  background-image: url("../2.jpg");
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










.main-timeline{
    overflow: hidden;
    position: relative;
}
.main-timeline:before{
    content: "";
    width: 3px;
    height: 100%;
    background: #d6d5d5;
    position: absolute;
    top: 0;
    left: 50%;
}
.main-timeline .timeline{
    padding-right: 30px;
    position: relative;
}
.main-timeline .timeline:before,
.main-timeline .timeline:after{
    content: "";
    display: block;
    width: 100%;
    clear: both;
}
.main-timeline .timeline:first-child:before,
.main-timeline .timeline:last-child:before{
    content: "";
    width: 13px;
    height: 13px;
    border-radius: 50%;
    border: 2px solid #d6d5d5;
    background: #fff;
    margin: 0 auto;
    position: absolute;
    top: 0;
    left: 0;
    right: -3px;
}
.main-timeline .timeline:last-child:before{
    top: auto;
    bottom: 0;
}
.main-timeline .timeline-icon{
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid #d6d5d5;
    box-sizing: content-box;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: -4px;
}
.main-timeline .timeline-icon:before{
    content: "";
    display: block;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #737ab4;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
.main-timeline .year{
    display: inline-block;
    padding: 8px 20px;
    margin: 0;
    font-size: 14px;
    color: #fff;
    background: #737ab4;
    text-align: center;
    position: absolute;
    top: 50%;
    right: 35%;
    transform: translateY(-50%);
}
.main-timeline .year:before{
    content: "";
    border-right: 18px solid #737ab4;
    border-top: 18px solid transparent;
    border-bottom: 18px solid transparent;
    position: absolute;
    top: 0;
    left: -18px;
}
.main-timeline .timeline-content{
    width: 46.5%;
    padding: 43px 50px;
    margin: 0 20px 0 0;
    background: #f2f2f2;
    position: relative;
}
.main-timeline .timeline-content:after{
    content: "";
    border-left: 20px solid #f2f2f2;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    position: absolute;
    top: 50%;
    right: -20px;
    transform: translateY(-50%);
}
.main-timeline .title{
    float: left;
    font-size: 24px;
    font-weight: bold;
    color: #504f54;
    margin: 0 20px 20px 0;
}
.main-timeline .post{
    display: inline-block;
    font-size: 14px;
    color: #999;
    margin-top: 6px;
}
.main-timeline .description{
    font-size: 14px;
    color: #7d7b7b;
    line-height: 24px;
    margin: 0;
    clear: both;
}
.main-timeline .timeline:nth-child(2n){ padding: 0 0 0 30px; }
.main-timeline .timeline:nth-child(2n) .year{
    right: auto;
    left: 35%;
}
.main-timeline .timeline:nth-child(2n) .year:before{
    border: 18px solid transparent;
    border-right: none;
    border-left: 18px solid #737ab4;
    left: auto;
    right: -18px;
}
.main-timeline .timeline:nth-child(2n) .timeline-content{
    float: right;
    margin: 0 0 0 20px;
}
.main-timeline .timeline:nth-child(2n) .timeline-content:after{
    border-left: none;
    border-right: 20px solid #f2f2f2;
    right: auto;
    left: -20px;
}
@media only screen and (max-width: 1200px){
    .main-timeline .year{ right: 30%; }
    .main-timeline .timeline:nth-child(2n) .year{ left: 30%; }
}
@media only screen and (max-width: 990px){
    .main-timeline .year{ right: 25%; }
    .main-timeline .timeline:nth-child(2n) .year{ left: 25%; }
}
@media only screen and (max-width: 767px){
    .main-timeline:before{ left: 10px; }
    .main-timeline .timeline{
        padding: 0 0 0 30px;
        margin-bottom: 20px;
    }
    .main-timeline .timeline:last-child{ margin-bottom: 0; }
    .main-timeline .timeline:first-child:before,
    .main-timeline .timeline:last-child:before{ display: none; }
    .main-timeline .timeline-icon{
        margin: 0;
        position: absolute;
        top: 7px;
        left: 0;
    }
    .main-timeline .year,
    .main-timeline .timeline:nth-child(2n) .year{
        display: block;
        font-weight: bold;
        margin: 0 0 32px 30px;
        z-index: 1;
        position: relative;
        top: auto;
        left: auto;
        right: auto;
        transform: none;
    }
    .main-timeline .timeline:nth-child(2n) .year:before{
        border-left: none;
        border-right: 18px solid #737ab4;
        right: auto;
        left: -18px;
    }
    .main-timeline .timeline-content{ padding: 20px; }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(2n) .timeline-content{
        width: auto;
        float: none;
        margin: 0 0 0 30px;
    }
    .main-timeline .timeline-content:after,
    .main-timeline .timeline:nth-child(2n) .timeline-content:after{
        border: none;
        border-bottom: 20px solid #f2f2f2;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        top: -20px;
        left: 50%;
        right: auto;
        transform: translateX(-50%);
    }
}
@media only screen and (max-width: 480px){
    .main-timeline .title{
        float: none;
        margin: 0;
    }
    .main-timeline .year,
    .main-timeline .timeline:nth-child(2n) .year{ margin-left: 20px; }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(2n) .timeline-content{ margin-left: 10px; }
    .main-timeline .post{ margin: 5px 0; }
}
    </style>
  </head>

















 
  <body><div class="container-fluid">
 @include('navbar1');
    <div>
  <div class="body">
    <div class="header" >
      <div class="">

         @foreach($images as $data) 
        <div class="row">
          <div class="col l6 m6 s6" style="padding: 20px;"></div>
          <div class="col l6 m6 s6" style=""><h1 style="font-size: 30px; color: #fff;background-color: black;opacity: 0.6;padding: 10px;"></h1></div>

        </div> 
      </div>
    </div>

    <div class="caption">
      <div class="">
      <div class="row">
      <div class="l6 m6 s6"></div>
        <div class=" m6 s6 l6">
          <h2 id="capt">

          "<?php 
          if ($data['caption']&&$data['caption']!='NULL') {
          echo $data['caption'];
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

        </div>

        <div class="col l3 m3 s3 center">
          
        </div>
     
      </div>
      </div>
     




<p class="box2">Write about your friend!</p> 
        <form action="/writetestimony/{{$data['rollno']}}" onSubmit="alert('Your views will be added in his yearbook after his registration and approval');" method="POST" style="padding-top: 0;">
          {{csrf_field()}}
        <div class="box4">
          <div class="row">
            <div class="col l6 m6 s12" style="display: none;">
              

            </div>
            <div class="col l6 m6 s12" style="display: none;">
              

            </div>
          </div>
          <div class="row">
            <div class="col l12 m12 s12">
              <label for="textarea2">Write Here! (Max 144 characters)</label>

              <textarea id="textarea2" name="viewf" placeholder="Write Here! (Max 144 Characters)" class="materialize-textarea" style="padding-bottom: 0;" maxlength="144"></textarea>
            </div>
          </div>
          <center>
          <button class="btn waves-effect waves-light" type="submit">submit</button></center>
        </div>
      </form>
      <br>

 @endforeach









      <div class=" center" style="padding: 20px;">

      <?php 
        echo "Here’s what his friends have written about him! These ones will be a part of his yearbook.";
      //include 'profile_approval.blade.php';
       
       //include('profile_approval');
?>

</div></div></div></div>
<br><br>

<?php
/*
$l=0;
echo'
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">';
foreach($myviews as $view)
{
  if($view['approval']=='1'){

            if($l==0)
            {
               echo ' <div class="timeline">
                    <span class="timeline-icon" ></span>
                    <span class="year">Testimonial</span>
                    <div class="timeline-content">
                        <h3 class="title">'.$view['user'].'</h3>
                        <span class="post"></span>
                        <p class="description">
                            '.$view["views"].'
                        </p>
                    </div>
                </div>';
                $l=1;
              }
              else{
                echo'
 
                <div class="timeline">
                    <span class="timeline-icon"></span>
                    <span class="year">Testimonial</span>
                    <div class="timeline-content">
                        <h3 class="title">'.$view['user'].'</h3>
                        <span class="post"></span>
                        <p class="description">
                           '.$view["views"].'
                        </p>
                    </div>
                </div>';
                $l=0;
              }
               
}
}
 echo '
            </div>
        </div>
    </div>
</div>
';
*/

?>



</body>





<script>
  /*
  $(document).on('click', '.approve', function(){
    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    var query= 'id='+id;
    $.ajax({
      url: 'views_approval_data.php',
      data: query,
      
      type: 'POST',
      success: function (data) {
          console.log(data);
          if(data){
            console.log(data);
            //$('.approve').remove();
            $('.app'+no).attr('value','disapprove');
            $('.app'+no).removeClass('approve');
            $('.app'+no).addClass('disapprove');
            $('.app'+no).removeClass('red');
            $('.text_show'+no).html('Approved');
          }else{
            alert("Please try again");
          }
        }
    });
  }); 
  $(document).on('click', '.disapprove',function(){
    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    var query= 'id='+id;
    $.ajax({
      url: 'views_disproval_data.php',
      data: query,
      
      type: 'POST',
      success: function (data) {
          console.log(data);
          if(data){
            console.log(data);
            $('.app'+no).attr('value','approve');
            $('.app'+no).removeClass('disapprove');
            $('.app'+no).addClass('approve');
            $('.app'+no).addClass('red');
            $('.text_show'+no).html('');
          }else{
            alert("Please try again");

          }
        }
    });
  }); 
  */  
</script>













  
  </body>
  
