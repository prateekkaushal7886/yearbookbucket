<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Details</title>

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



  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
          <li class="nav-item active px-lg-3">
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


    

    

    <section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">Edit Details</span>
              </h2>
              
              <form class="form" method="post" action="/details">
                {{csrf_field()}}
                @if (count($errors) > 0)

                <script type="text/javascript">

                  alert('<?php foreach($errors->all() as $error) { echo "$error"; } ?>');

                </script>

                @endif
                <div class="row" style="text-align: center;">
                  <div class="col">
                    <label for="department">Department</label>
                    <select name="department"  id="department" required class="form-control">
                      <option selected value="{{Auth::user()->department}}">@php
                      if(!empty(Auth::user()->department))
                        {
                          echo Auth::user()->department;
                        }
                        else
                        {
                          echo 'Choose your department';
                        }
                        @endphp   
                      </option>
                      <option value="AE">AE</option>
                      <option value="AG">AG</option>
                      <option value="AR">AR</option>
                      <option value="AT">AT</option>
                      <option value="BM">BM</option>
                      <option value="BT">BT</option>
                      <option value="CE">CE</option>
                      <option value="CH">CH</option>
                      <option value="CL">CL</option>
                      <option value="CR">CR</option>
                      <option value="CS">CS</option>
                      <option value="CY">CY</option>
                      <option value="EC">EC</option>
                      <option value="EE">EE</option>
                      <option value="ET">ET</option>
                      <option value="GG">GG</option>
                      <option value="GS">GS</option>
                      <option value="HS">HS</option>
                      <option value="ID">ID</option>
                      <option value="IM">IM</option>
                      <option value="IP">IP</option>
                      <option value="IT">IT</option>
                      <option value="MA">MA</option>
                      <option value="ME">ME</option>
                      <option value="MI">MI</option> 
                      <option value="MM">MM</option>
                      <option value="MS">MS</option>
                      <option value="MT">MT</option>
                      <option value="NA">NA</option>
                      <option value="PH">PH</option>
                      <option value="RD">RD</option>
                      <option value="RE">RE</option>
                      <option value="RJ">RJ</option>
                      <option value="RT">RT</option>
                      <option value="TS">TS</option>
                      <option value="WM">WM</option>
                    </select>
                  </div>
                  <div class="col">
                    <label for="HOR">Hall of Residence</label>
                    <select name="HOR"  id="HOR" required class="form-control">
                      <option selected value="{{Auth::user()->HOR}}">@php
                      if(!empty(Auth::user()->HOR)) 
                        {
                          echo Auth::user()->HOR;
                        }
                        else
                        {
                          echo 'Choose your HALL';
                        }
                        @endphp 
                      </option>
                      <option value="SAM"> Ashutosh Mukherjee Hall </option>
                      <option value="AZ"> Azad Hall </option>
                      <option value="BCR"> B C Roy Hall </option>
                      <option value="BRH"> B R Ambedkar Hall </option>
                      <option value="GKH"> Gokhale Hall </option>
                      <option value="HJB"> Homi Bhabha Hall </option>
                      <option value="JCB"> J C Bose Hall </option>
                      <option value="LLR"> Lala Lajpat Rai Hall </option>
                      <option value="LBS"> Lalbahadur Sastry Hall </option>
                      <option value="MMM"> Madan Mohan Malviya Hall </option>
                      <option value="MS"> Megnad Saha Hall </option>
                      <option value="MT"> Mother Teresa Hall </option>
                      <option value="NH"> Nehru Hall </option>
                      <option value="PH"> Patel Hall </option>
                      <option value="RK"> Radha Krishnan Hall </option>
                      <option value="RP">Rajendra Prasad Hall </option>
                      <option value="RLB">Rani Laxmibai Hall </option>
                      <option value="SN/IG">Sarojini Naidu/Indira Gandhi Hall</option> 
                      <option value="NVH">Sister Nivedita Hall </option>
                      <option value="VS">Vidyasagar Hall </option>
                      <option value="VSRC">Vikram Sarabhai residential Complex </option>
                      <option value="ZH">Zakir Hussain Hall </option>
                      <option value="other">Other </option>
                    </select>
                  </div>
                  <div class="col">
                    <label for="course">Course</label>
                    <select name="course"  required class="form-control">
                      <option selected value="{{Auth::user()->course}}">@php 
                      if(!empty(Auth::user()->course))
                        {
                          echo Auth::user()->course;
                        }
                        else
                        {
                          echo 'Choose your COURSE';
                        }
                        @endphp 
                      </option>
                      <option value="UG">UG</option>
                      <option value="PG">PG</option>
                      <option value="RS">RS</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <i class="material-icons prefix">email</i>&nbsp;
                    <label for="email">Email</label>
                    <input name="email" value="{{Auth::user()->email}}"  class="form-control" type="email" required >

                  </div>
                  <div class="col">
                    <i class="material-icons prefix">phone</i>&nbsp;
                    <label for="phone">Phone no</label>
                    <input name="phone" value="{{Auth::user()->phone}}" class="form-control"  type="number" size="10" required> 
                  </div>

                </div>
                <br>
                <div class="row">

                  <div class="col">
                    <button class="btn btn-success" type="submit" class="form-control"> Update </button>
                  </div>
                </div>


              </form>

            </div>
          </div>
        </div>

      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Yearbook 2018</p>
      </div>
    </footer>
  </body>



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