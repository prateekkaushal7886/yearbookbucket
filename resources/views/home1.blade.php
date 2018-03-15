<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Home</title>



  <!-- Bootstrap core CSS -->

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

 <!--for tutorial introjs file -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.7.0/introjs.css">

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
          <li class="nav-item px-lg-6" data-step="4" data-intro="<center> Search and write about your friends </center> ">

            <form action="search/" method="POST" class="form-inline">
              {{ csrf_field() }}
              <div class="form-group" >
                <input type="text" name="search" required="required" id="search" class="form-control" placeholder="Search your friend here">
              </div>
              <div class="form-group" style="margin-left: 8px;">
                <button type="submit" class="btn btn-default" style="margin-top: 0px;" >Search</button>
              </div>
            </form>
          </li>
          <li class="nav-item active px-lg-3">
            <a class="nav-link text-uppercase text-expanded" href="/home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-3">
            <a class="nav-link text-uppercase text-expanded" href="/trending" data-step="5" data-intro="<center> See the most popular photos of Kgpians </center> ">Trending</a>
          </li>
          <li class="nav-item px-lg-3">
            <a class="nav-link text-uppercase text-expanded" href="/profile_index" data-step="6" data-intro="<center> See your profile and know what your friends think about you </center> ">{{Auth::user()->name}}</a>
          </li>
          <li class="nav-item px-lg-3 dropdown" data-step="8" data-intro="<center> Update info ,Logout </center> ">
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
          <li class="nav-item px-lg-3 dropdown" data-step="7" data-intro="<center> See notifications here</center> ">
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

            <!-- tutorial  just add data-step and data -intro in any html element to include it in tutorial-->
            
           <li class="nav-item px-lg-3">
                  <a class="nav-link text-uppercase text-expanded"  href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress', true).start();">Tutorial <i class="fa fa-question-circle" style="font-size:18px"></i></a>
           </li>
          </ul>
        </div>
      </div>
    </nav>
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Yearbook'2018</span>
      <span class="site-heading-lower">A Journey Through Time</span>
    </h1>


    <div id="modal2" class="modal fade" role="dialog">

      <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content" style="text-align: center;">

          <div class="modal-header">



            <h4 class="modal-title" style="color: white;">Upload Picture and Caption</h4>

            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>

          <div class="modal-body">

            <form action="/upload_pic_moto" method="post" enctype="multipart/form-data">

              {{csrf_field()}}

              @if (count($errors) > 0)

              <script type="text/javascript">

                alert('<?php foreach($errors->all() as $error) { echo "$error"; } ?>');

              </script>

              @endif

              <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="readURL(this);">

              <img src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/shot.jpg';}?>" alt="" class="intro-img img-fluid mb-3 mb-lg-0 rounded" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">

              <div class="input-field col sm-12 lg-12 md-12">

                <div class="form-group">

                  <label for="comment">Caption (Max 50 characters)</label>
                  @if(!empty(Auth::user()->view_self))
                  <textarea name="motto" id="icon_prefix2" class="form-control" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50" rows="2" id="comment">{{Auth::user()->view_self}}</textarea>
                  @else
                  <textarea name="motto" id="icon_prefix2" class="form-control" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50" rows="2" id="comment"></textarea>
                  @endif


                </div>



              </div>

              <input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="width: 150px;" id="imgsave">

            </form>

          </div>

        </div>



      </div>

    </div>

    

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          @if(!empty(Auth::user()->pro_pic))
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" style="height: 600px" src="{{Auth::user()->pro_pic}}" alt="">
          @else
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" style="height: 600px" src="img/intro.jpg" alt="">
          @endif
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <!--<span class="section-heading-upper">{{Auth::user()->name}}</span>-->
              <span class="section-heading-lower">{{Auth::user()->name}}</span>
            </h2>
            @if(!empty(Auth::user()->view_self))
            <p class="mb-3">"{{Auth::user()->view_self}}"</p>
            @else
            <p class="mb-3">"Your Caption Here!"</p>
            @endif
            <div class="intro-button mx-auto">

              <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal2" data-step="1" data-intro="<center> Upload your profile picture and write a caption here </center> "  >Upload Picture and Caption
              </button>
              <button type="button" class="btn btn-primary btn-md" onclick="location.href='/writeup'" data-step="2" data-intro="<center> Share your interesting memories with us</center> ">Write Article</button>
              <button type="button" class="btn btn-primary btn-md" onclick="location.href='/upload'" data-step="3" data-intro="<center> Upload some Funny photos of you and your friend </center> "  >Upload Photo
              </button>

              
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">Yearbook</span>
              </h2>
              <p class="mb-0"> The yearbook is an opus of memories that you would carry along graduating from the institute. The wonderful years spent in the campus are engraved and expressed via photographs and writeups in this departing souvenir from IIT KGP. 

              With an assortment of your thoughts and snaps from various experiences through the years, the book truly collaborates your time in KGP and is a walk down your memory lane every time you look through it.</p>
              <br>
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">Prevoius Yearbook</span>
              </h2>
              <div class="row">
                <div class="col-lg-4 col-sm-4"><img src="ind/year16.jpg" width="100%" alt=""/></div>

                <div class="col-lg-4 col-sm-4"> <img src="ind/year2015.jpg" width="100%"  alt=""/></div>

                <div class="col-lg-4 col-sm-4"> <img src="ind/year2014.jpg" width="100%"  alt=""/></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Yearbook 2018</p>
        <p class="m-0 small"><a target="_blank" href="http://www.sac.iitkgp.ac.in/team.php">Contact Us</a></p>
      </div>
    </footer>


<!-- for intro js in tutorial-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.7.0/intro.js"></script>  
  </body>


  <script type="text/javascript">

            /*

              This script is used to check if the profile pic and caption is uplaoded or not

              If not then triggers the modal to upload the pic and caption

              */

              var back = "<?php if (!empty(Auth::user()->view_self)) echo 1;else echo 0; ?>" ;

              var back2 = "<?php echo Auth::user()->pro_pic; ?>" ;

              $(document).ready(function() {

                $('#modal2').modal('hide');



                if ( (!back)||!(back2) ) {

                  $("#modal2").modal('show');

                } else {

                }



              });
              $('#photo').click(function(){

                $('#photo').submit();

              });

              $('#writeup').click(function(){

                $('#writeup').submit();

              });

              $('#views').click(function(){

                $('#views').submit();

              });



              $('#OpenImgUpload').click(function(){ $('#fileToUpload').trigger('click'); });

              function readURL(input) {



                if (input.files && input.files[0]) {

                  var reader = new FileReader();



                  reader.onload = function (e) {

                    $('#OpenImgUpload')

                    .attr('src', e.target.result)

                  };



                  reader.readAsDataURL(input.files[0]);

                }

              }

            </script>
            </html>
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