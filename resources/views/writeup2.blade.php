<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Writeup</title>

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
  .cta .cta-inner:before
  {
    content: none;
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



    <section class="page-section cta" style="background-color: rgba(86,78,107,0.55);">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">Upload Articles</span>
              </h2>
              <p class="mb-0"> 
              How have all these years in KGP transformed you? What’s your funniest experience in the campus? Share with us your stories to make it a part of the yearbook that you carry along. Choose the topic below and send us your articles.</p>
              <br>
              <form class="form-horizontal" method="POST" action="/writeup">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-4">
                   <select name="topic" id="topic" class="form-control" required="required" onchange="showfield(this.options[this.selectedIndex].value)">
                    <option selected disabled value="">Choose your topic</option>
                    <option  value="Spring Fest">Spring Fest</option>
                    <option value="Kshitij">Kshitij</option>
                    <option value="Annual Alumni Meet">Annual Alumni Meet</option>
                    <option value="Life at Kgp">Life at Kgp</option>
                    <option value="Illumination">Illumination</option>
                    <option value="Hall">Hall</option>
                    <option value="Every Place a Story">Every Place has a Story</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col input-group">
                  <span class="input-group-addon"><i class="material-icons prefix">mode_edit</i></span>
                  <textarea name="writeup" id="icon_prefix2" required class="form-control" placeholder="Your article here"></textarea>
                </div>
              </div>
              <br>
              <div class="form-group"> 
                <button class="btn btn-success" type="submit">Submit</button>
              </div>
            </form>

            <table class="table table-hover">
              <thead>
                <tr>

                  <th>SL-No.</th>
                  <th>Topic</th>
                  <th>Writeup<i class="material-icons" style="font-size: 20px;padding-left: 10px;width: 100%; ">mode_edit</i></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $k=1;
                ?>

                @foreach ( $writeups as $writeup)

                <tr class="table-row" style="border-bottom: 1px solid silver">
                  <td style="text-align: center;"> <?php echo $k; ?></td>
                  <td >{{ $writeup->topic }}</td>
                  
                  <td onblur="update({{ $writeup->id }})" id="{{ $writeup->id }}" contenteditable >{!!  nl2br($writeup->writeup)!!}</td>
                  <td style="width: 50px"><a href="/writeup/{{ $writeup->id }}"><i class="material-icons">delete</i></a></td>

                </tr>
                <?php $k++ ; ?>
                @endforeach
                <?php  

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
</body>


<script type="text/javascript">

 function update(id){
  var writeupedit=$("#"+id).text();
  //console.log(writeupedit);
  $.ajax({
    type: "POST",
    url:' {{ URL::to("/updates") }} ',
    data: {
      writeup: writeupedit,
      id:id,
      _token: $('#signup-token').val()
    }


  });
}
 function showfield(name){
      if(name=='other')document.getElementById('div1').innerHTML='Write your Topic here: <input type="text" name="writeup" />';
      else document.getElementById('div1').innerHTML='';
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