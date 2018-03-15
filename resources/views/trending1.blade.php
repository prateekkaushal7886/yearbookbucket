<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Trending</title>

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
  <link href="css/business-casual.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
  <script src="js/autocomplete.js"></script>
  <style type="text/css">
  .pagination {
   justify-content: center;
 }

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

<div  class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col" style="width: 800px; height: 500px;">
            <img src="" class="enlargeImageModalSource" style="height: 100%;width: 100%; object-fit: contain;">
          </div>
          <div class="col" style="margin-right: 11px ; border: 1px solid;">
            <br>
            <form class="form" id="form-comment" action="/comment" method="post">
              {{csrf_field()}}
              <input id="comment-token" type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <textarea name="comment" id="textarea" class="form-control" required="required" placeholder="Your comments here..."></textarea>
              </div>
              <div class="row">
                <div class="col"><button class="btn btn-success" style="width: 100%;" id="submitt">Comment</button></div>
                <div class="col approval" id="like"></div>
              </div>
            </form>


            <div id="comments" class="table-scrollable">
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
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
          <li class="nav-item px-lg-4">

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
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/trending">Trending</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/profile_index">{{Auth::user()->name}}</a>
          </li>
          <li class="nav-item px-lg-4 dropdown">
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
          <li class="nav-item px-lg-4 dropdown">
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
    <br>
    {{ $images->links('vendor.pagination.bootstrap-4')}}
    @php
    $count= 0;
    @endphp

    @foreach($images as $image)
    @if(file_exists($image['url']))
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <!--<span class="section-heading-upper">Blended to Perfection</span>-->
                @php
                $name = App\User::where('rollno',$image['rollno'])->get()->toArray();

                @endphp

                <strong>
                  @php
                  echo '#';
                  $count1 = $count + ($currentpage*$perpage ) -($perpage-1);
                  echo $count1 ;
                  $count++;
                  @endphp
                </strong>
                <span class="section-heading-lower">{{$name[0]['name']}}</span>
                <span class="section-heading-upper">"{{$image['caption']}}"</span>

              </h2>
              <strong>{{$image['created_at']->diffForHumans() }}</strong>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$image['url']}}" id="{{$image['id']}}"  data-toggle="tooltip" data-placement="top" title="Click the image!" style="cursor: pointer;">
       <!-- <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$image['caption']}}</p>
          </div>
        </div>-->
      </div>
    </div>
  </section>
  @endif
  @endforeach

  {{ $images->links('vendor.pagination.bootstrap-4')}}
  <!--
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Delicious Treats, Good Eats</span>
              <span class="section-heading-lower">Bakery &amp; Kitchen</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-02.jpg" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">From Around the World</span>
              <span class="section-heading-lower">Bulk Speciality Blends</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-03.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
          </div>
        </div>
      </div>
    </div>
  </section>-->



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


  $('#like').click('#like', function() {
    var formData = {

      'pic_id' : $('.enlargeImageModalSource').attr('id'),
      '_token' : $('#comment-token').val()
    }

    $.ajax({
      url: "/likeadd",
      type: "POST",
      data: formData,

      success: function(response)
      {

       document.getElementById("like").innerHTML = response;
     },
     error: function(data)
     {

     }
   });

  });
  $(function() {
    $('.product-item-img').on('click', function() {
      $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
      $('.enlargeImageModalSource').attr('id', $(this).attr('id'));
      $('#enlargeImageModal').modal('show');
      var formData = {
        'comments' : $('textarea[name=comment]').val(),
        'pic_id' : $('.enlargeImageModalSource').attr('id'),
        '_token' : $('#comment-token').val()
      }
      $.ajax({
        url: "/commentadd",
        type: "POST",
        data: formData,

        success: function(response)
        {

          document.getElementById("comments").innerHTML = response;
        },
        error: function(data)
        {

        }
      });


      $.ajax({
        url: "/likes",
        type: "POST",
        data: formData,

        success: function(response)
        {

          document.getElementById("like").innerHTML = response;

        },
        error: function(data)
        {


        }
      });

    });
  });


  $(document).ready(function (e) {
    $('form#form-comment').on('submit', function(e) {
     e.preventDefault();
     var formData = {
      'comments' : $('textarea[name=comment]').val(),
      'pic_id' : $('.enlargeImageModalSource').attr('id'),
      '_token' : $('#comment-token').val()
    }
    console.log(formData);

    $.ajax({
      url: "/comment",
      type: "POST",
      data: formData,

      success: function(response)
      {
        console.log('Added Comments');
        document.getElementById("textarea").value="";
        document.getElementById("comments").innerHTML = response;
      },
      error: function(data)
      {
        console.log('Error in comment');  
      }
    });
  });
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })


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