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
  

     
  
 <section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">BUCKET LIST</span>
              </h2>
              <p class="mb-0">Here is a list of things which you can do before graduating.Complete the tasks and upload the images and we will make sure they become a part of your yearbook.</p>
              <br>
            
          

<!-- that’s all folks! -->
          </div>
          </div>
        </div>

      </div>

      <br><br><br>
      <div class="container">
        <div class="row">
     <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket1.jpg">
 

    <!-- the username -->
    <h1>SF Salsa</h1>

    <!-- and role or location -->
    <h2>Swayed to the beats of Salsa in SF</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">

    <p></p>
    <p></p>
<form action="bucketpost/1" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
  </div>

  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket11.jpg">
    

    <!-- the username -->
    <h1>Old Archi Building</h1>

    <!-- and role or location -->
    <h2>Felt the horror in Old Archi Building</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/2" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
    

  </div>

  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket10.jpg">
    

    <!-- the username -->
    <h1>Graffitis</h1>

    <!-- and role or location -->
    <h2>Sketched graffiti in hall.</h2>

  </header>

  <!-- bit of a bio; who are you? -->
 <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/3" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>
  <!-- some social links to show off -->
  
</aside></div> 
 

   </div>
   <br><br>

<div class="row">
     <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket12.jpg">
    

    <!-- the username -->
    <h1>Howrah Bridges</h1>

    <!-- and role or location -->
    <h2>- Cruise ride under the Howrah Bridge -</h2>

  </header>

  <!-- bit of a bio; who are you? -->
 <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/4" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>

  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
   
      <img src="bucket9.jpg">
   

    <!-- the username -->
    <h1>Star Gazing</h1>

    <!-- and role or location -->
    <h2>-Star gazing at the romantic lake. -</h2>

  </header>

  <!-- bit of a bio; who are you? -->
 <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/5" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>

  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
  
      <img src="bucket8.jpg">
 

    <!-- the username -->
    <h1>Twilight View</h1>

    <!-- and role or location -->
    <h2>- Twilight view from Nalanda top -</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/6" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>
  <!-- some social links to show off -->
  
</aside></div> 
 

   </div>
   <br><br>

   <div class="row">
     <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket7.jpg">
   

    <!-- the username -->
    <h1>Treat</h1>

    <!-- and role or location -->
    <h2>- Treat at Kolaghat.  -</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/7" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>

  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket6.jpg">
   

    <!-- the username -->
    <h1>Bonfire</h1>

    <!-- and role or location -->
    <h2>- Jolly Bonfire at Beach -</h2>

  </header>

  <!-- bit of a bio; who are you? -->
 <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/8" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>

  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket5.jpg">
    

    <!-- the username -->
    <h1>Little Sisters</h1>

    <!-- and role or location -->
    <h2>“Delicacies” at Little Sisters</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/9" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>

  <!-- some social links to show off -->
  
</aside></div> 
 

   </div>
<br><br>
   <div class="row">
     <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket4.png">
   

    <!-- the username -->
    <h1>Trek</h1>

    <!-- and role or location -->
    <h2>Trek to Gangtok</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/10" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>

  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
    
      <img src="bucket3.jpg">
   

    <!-- the username -->
    <h1>Local Train</h1>

    <!-- and role or location -->
    <h2>Voyage on local train</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/11" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>
  <!-- some social links to show off -->
  
</aside></div> 
 <div class="col-sm-4"><aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
   
      <img src="bucket2.jpg">
   

    <!-- the username -->
    <h1>2.2</h1>

    <!-- and role or location -->
    <h2>Sing Along with friends on 2.2</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio" style="text-align: center;">


<form action="bucketpost/12" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
</form>
</div>

  <!-- some social links to show off -->
  
</aside></div> 
 

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









  <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->
<style type="text/css">
  /* go on then, styles go here.. knock yourself out! */

@import url(https://fonts.googleapis.com/css?family=Roboto);


header img {
  border-radius: 50%;
  margin: 20px auto;
  display: block;
  width: 200px;
  border: 5px solid #fff;
}

aside {
  border-top: 0px solid #26A69A;
  border-bottom: 0px solid #00695C;
  border-radius: 50%;
  margin: 0 auto;
  display: block;
  height: 250px;
  width: 250px;
  background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);
  background-size: cover;
  overflow: hidden;
  /*box-shadow: 0 0 100px 10px #fff;*/
  transition: all ease 0.3s;
}

aside:hover {
  border-top: 4px solid #26A69A;
  border-bottom: 4px solid #00695C;
  border-radius: 5px;
  height: 480px;
  width: 350px;
  
}

aside:hover header img {
  animation: profile_image 2000ms linear both;
  animation-delay: 0.5s;
}

header {
  text-align: center;
}

header h1 {
  position: relative;
  text-align: center;
  color: #fff;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
  font-size: 25px;
  line-height: 25px;
  display: inline-block;
  padding: 10px;
  transition: all ease 0.250s;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #fff;
}

aside:hover header h1 {
  margin-top: 0px;
  outline: 0 solid #fff;
  border-top: 0px solid #fff;
  border-bottom: 1px solid #fff;
}

header h2 {
  text-align: center;
  color: #fff;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
  font-size: 17px;
  font-weight: normal;
  line-height: 0px;
  margin: 0;
}

.profile-bio {
  margin-top: 20px;
  padding: 1px 20px 10px 20px !important;
  transition: all linear 1.5s;
  color: #fff;
  font-size: 14px;
  opacity: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.42) 49%, rgba(0, 0, 0, 0.61) 100%);
}

aside:hover .profile-bio {
  opacity: 1;
}

.profile-bio p:first-child {
  text-align: center;
  font-size: 16px;
}

.profile-social-links {
  position: relative;
  margin-top: -440px;
  margin-left: -100px;
  list-style-type: none;
  opacity: 0;
  transition: all ease 0.5s;
}

aside:hover .profile-social-links {
  margin-left: -30px;
  opacity: 1;
}

.profile-social-links li img {
  width: 30px;
  background: #fff;
  border-radius: 50%;
  padding: 5px;
}
/*PROFILE IMAGE ANIMATE */

@keyframes profile_image {
  0% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  3.4% {
    transform: matrix3d(1.032, 0, 0, 0, 0, 1.041, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  4.7% {
    transform: matrix3d(1.045, 0, 0, 0, 0, 1.06, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  6.81% {
    transform: matrix3d(1.066, 0, 0, 0, 0, 1.089, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  9.41% {
    transform: matrix3d(1.088, 0, 0, 0, 0, 1.117, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  10.21% {
    transform: matrix3d(1.094, 0, 0, 0, 0, 1.123, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  13.61% {
    transform: matrix3d(1.112, 0, 0, 0, 0, 1.133, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  14.11% {
    transform: matrix3d(1.114, 0, 0, 0, 0, 1.133, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  17.52% {
    transform: matrix3d(1.121, 0, 0, 0, 0, 1.124, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  18.72% {
    transform: matrix3d(1.121, 0, 0, 0, 0, 1.119, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  21.32% {
    transform: matrix3d(1.12, 0, 0, 0, 0, 1.107, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  24.32% {
    transform: matrix3d(1.115, 0, 0, 0, 0, 1.096, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  25.23% {
    transform: matrix3d(1.113, 0, 0, 0, 0, 1.094, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  29.03% {
    transform: matrix3d(1.106, 0, 0, 0, 0, 1.09, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  29.93% {
    transform: matrix3d(1.105, 0, 0, 0, 0, 1.09, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  35.54% {
    transform: matrix3d(1.098, 0, 0, 0, 0, 1.096, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  36.74% {
    transform: matrix3d(1.097, 0, 0, 0, 0, 1.098, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  41.04% {
    transform: matrix3d(1.096, 0, 0, 0, 0, 1.102, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  44.44% {
    transform: matrix3d(1.097, 0, 0, 0, 0, 1.103, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  52.15% {
    transform: matrix3d(1.099, 0, 0, 0, 0, 1.101, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  59.86% {
    transform: matrix3d(1.101, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  63.26% {
    transform: matrix3d(1.101, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  75.28% {
    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  85.49% {
    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  90.69% {
    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  100% {
    transform: matrix3d(1.1, 0, 0, 0, 0, 1.1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
}
/*NAME ANIMATE */

aside:hover header h1 {
  animation: name_and_job 1500ms linear both;
  animation-delay: 0.4s;
}

@keyframes name_and_job {
  0% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1);
  }
  1.3% {
    transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1);
  }
  2.55% {
    transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1);
  }
  4.1% {
    transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1);
  }
  5.71% {
    transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1);
  }
  8.11% {
    transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1);
  }
  8.81% {
    transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1);
  }
  11.96% {
    transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1);
  }
  12.11% {
    transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1);
  }
  15.07% {
    transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1);
  }
  16.12% {
    transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1);
  }
  27.23% {
    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1);
  }
  27.58% {
    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1);
  }
  38.34% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1);
  }
  40.09% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1);
  }
  50% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1);
  }
  60.56% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1);
  }
  82.78% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  100% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
}

aside:hover ul li:first-child {
  animation: social_animation 2000ms ease-in-out both;
  animation-delay: 0.75s;
}

aside:hover ul li:nth-child(2) {
  animation: social_animation 2000ms ease-in-out both;
  animation-delay: 1s;
}

aside:hover ul li:nth-child(3) {
  animation: social_animation 2000ms ease-in-out both;
  animation-delay: 1.25s;
}

@keyframes social_animation {
  0% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, 0, 0, 1);
  }
  1.3% {
    transform: matrix3d(3.905, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -237.02, 0, 0, 1);
  }
  2.55% {
    transform: matrix3d(4.554, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -182.798, 0, 0, 1);
  }
  4.1% {
    transform: matrix3d(4.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -125.912, 0, 0, 1);
  }
  5.71% {
    transform: matrix3d(3.039, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -79.596, 0, 0, 1);
  }
  8.11% {
    transform: matrix3d(1.82, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -31.647, 0, 0, 1);
  }
  8.81% {
    transform: matrix3d(1.581, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -21.84, 0, 0, 1);
  }
  11.96% {
    transform: matrix3d(1.034, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 4.825, 0, 0, 1);
  }
  12.11% {
    transform: matrix3d(1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.53, 0, 0, 1);
  }
  15.07% {
    transform: matrix3d(0.947, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 12.662, 0, 0, 1);
  }
  16.12% {
    transform: matrix3d(0.951, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.007, 0, 0, 1);
  }
  27.23% {
    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.352, 0, 0, 1);
  }
  27.58% {
    transform: matrix3d(1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.121, 0, 0, 1);
  }
  38.34% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.311, 0, 0, 1);
  }
  40.09% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.291, 0, 0, 1);
  }
  50% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.048, 0, 0, 1);
  }
  60.56% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.007, 0, 0, 1);
  }
  82.78% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  100% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
}
</style>
