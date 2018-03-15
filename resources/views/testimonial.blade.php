<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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
  .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
  }

  .stars
  {
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
  }
  .btn{
    width: 280px;
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

.cta .cta-inner:before
{
  content: none !important;
}

.nav-justified .nav-item {
 
  background-color: #a9b1a9;
}
</style>

<link rel="stylesheet" type="text/css" href="../../css/animate.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/business-casual.min.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="../css/autocomplete.css">
<script src="../js/autocomplete.js"></script>

<!-- Bootstrap core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/business-casual.min.css" rel="stylesheet">

</head>

<body>
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

            <form action="../search/" method="POST" class="form-inline">
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
    
    
    @foreach($mydata as $data)   
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          
          <div class="col-xl-9 col-lg-10 mx-auto">

            <div class="bg-faded rounded p-5">
              <div class="row">
                
               <div class="col l6 m6 s6" style="padding: 23px;margin-left: 30%;margin-top: -20%;"><img class="img-thumbnail" width="180px"; height= "180px";  src="<?php if (!empty($data['pro_pic'])){echo '../'.$data['pro_pic']; } else { echo '../ind/shot.jpg';}?>" alt="" class="circle responsive-img" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;"></div>

             </div> 
             
             <h2 class="section-heading mb-4">
              <span class="section-heading-upper"> "<?php 
              if ($data['view_self']&&$data['view_self']!='NULL') {
                echo $data['view_self'];
              }else{
                echo "No Caption Uploaded";
              }
              ?>"</span>
              <span class="section-heading-lower"><?php echo $data['name']; ?></span>
            </h2>
            <div class="">
              <div class="row" style=" color: #fff;background-color: black;opacity: 0.6;padding: 10px;">
                <div class="col l3 m3 s3 center">
                  <h6 style="font-weight:bolder" >Roll No.</h6>
                  <h6><?php echo $data['rollno']; ?></h6>
                </div>
                <div class="col l3 m3 s3 center">
                  <h6 style="font-weight:bolder">Hall</h6>
                  <h6><?php echo $data['HOR']; ?></h6>
                </div>
                <div class="col l3 m3 s3 center">

                  <h6 style="font-weight:bolder">Email</h6>
                  <h6>
                   <?php 
                   if ($data['email']) {
                    echo $data['email'];
                  }else{
                    echo "No Email Provided";
                  }
                  ?></h6>
                </div>

                <div class="col l3 m3 s3 center">
                  <h6 style="font-weight:bolder">Department</h6>
                  <h6>
                    <?php 
                    if ($data['department']) {
                      echo $data['department'];
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
    @endforeach
    <section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
      <div class="container">
        <div class="row">
          <div class="col-xl-13 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower"><div class="col-md-7">
                  <div class="well well-sm">
                    <div class="text-right">
                      <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Write Testimonial</a>
                    </div>
                    
                    <div class="row" id="post-review-box" style="display:none;">
                      <div class="col-md-12">
                        <form action="/writetestimony/{{$data['rollno']}}" onSubmit="alert('Your views will be added in his yearbook after his registration and approval');" method="POST" style="padding-top: 0;">
                          {{csrf_field()}}
                          <input id="ratings-hidden" name="rating" type="hidden"> 
                          <textarea class="form-control animated" cols="50" id="new-review" name="viewf" placeholder="Enter your review here...(max 144 character)" rows="5" maxlength="144" ></textarea>
                          
                          <div class="text-right">
                            <div class="stars starrr" data-rating="0"></div>
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                              <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                              <button class="btn btn-success btn-sm" type="submit">Submit</button>
                            </div>
                          </form>
                          
                        </div>
                      </div> </span>
                    </h2>
                    <p class="mb-0"> Here’s what your friends written about you! Your testimonials are displayed below. You can approve or disapprove them by selecting the option shown beside each testimonial. The approved ones shall be a part of your yearbook.</p>
                    <br>
                    
                    <ul id="tabs-swipe-demo" class="nav nav-tabs nav-justified">
                      <li class="nav-item"><a data-toggle="tab" class="nav-link active " href="#testimonial">Testimonial</a></li>
                      <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#gallery">Gallery</a></li>
                    </ul>
                    <br>
                    <div class="tab-content">
                      <div id="testimonial" class="container tab-pane active">

                        <?php
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


                      ?>

                    </div>
                    <div id="gallery" class="tab-pane fade">
                     <p>
                       @include('gallery3')
                     </p>
                   </div>
                   
                   
                   
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
</body>
</html>
<script type="text/javascript">
  (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

  var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

  $(function(){

    $('#new-review').autosize({append: "\n"});

    var reviewBox = $('#post-review-box');
    var newReview = $('#new-review');
    var openReviewBtn = $('#open-review-box');
    var closeReviewBtn = $('#close-review-box');
    var ratingsField = $('#ratings-hidden');

    openReviewBtn.click(function(e)
    {
      reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
      openReviewBtn.fadeOut(100);
      closeReviewBtn.show();
    });

    closeReviewBtn.click(function(e)
    {
      e.preventDefault();
      reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
      closeReviewBtn.hide();
      
    });

    $('.starrr').on('starrr:change', function(e, value){
      ratingsField.val(value);
    });
  });
</script>