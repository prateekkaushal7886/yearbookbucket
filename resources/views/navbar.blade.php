<head>
<!--link for notification icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
</head>
<script>
 $(document).ready(function(){
   if ($(window).width()>770) {
    (function($){ $('#nav').show();

  })(jQuery, undefined); }
  else{$('#nav').remove(); $('#mob_nav').show();
}
$(".button-collapse").sideNav();
});

</script>

<div id="nav" class="row" style="background-color: black; display: none;">

 
  <div align="left" class="col l1 s2 m2">
    <a style="margin-top:1.3em" class="waves-effect waves-light btn-large" href="/home">
      <i class="material-icons right">        
      </i>Home
    </a>
  </div>
  <div  class="col l2 m4 s3 right-align">
    <a href="http://www.sac.iitkgp.ac.in">
      <img height="90" width="250" src="sac.png" alt="someimg"/>
    </a>
  </div>
  <div  class="col l2 m4 s3 right-align">
    <a href="#">
      <img height="90" width="250" src="yearbook.png" alt="someimg"/>
    </a>
  </div>


   <!-- for unread notification-->
  <div align="right" class="col l3 m2 s2">
  <!--go to web.php for route in anchor tag -->
    <a href="/updateread" style="margin-top:1.3em" class="waves-effect waves-light btn-large" >
      <i class="material-icons right"></i>
    <i class="fa fa-globe fa-2x" aria-hidden="true"></i>
    <span class="badge" style="background: #ff4d4d; position: relative; top: -15px; left: -8px; color:black;" >
      {{
      // 1 is default value assigned selecting the user corresponding to unread

       App\views::where('read',1)
      ->where('user',Auth::user()->name)     
      ->count()
      }}
    </span>
     </a>
  </div>

  <div align="right" class="col l2 m4 s4">
    <a href="https://erp.iitkgp.ernet.in" style="margin-top:1.3em" class="waves-effect waves-light btn-large">
      Edit ERP Profile pic
      <i class="material-icons right"></i>
    </a>
  </div>
  <div align="right" class="col l2 m2 s2">
    <a href="/logout" style="margin-top:1.3em" class="waves-effect waves-light btn-large">
      <i class="material-icons right"></i>
    Logout</a>
  </div>


</div>

<nav id="mob_nav" style="display: none; background-color: black;" >
  <div class="nav-wrapper">
    <a href="/home" data-activates="mobile-demo" class="button-collapse">
      <i class="material-icons">menu</i>
    </a>
    <a href="#!" class="brand-logo">
      <img width="120" height="50" src="year.png" alt="someimg"/>
    </a>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="/home">Home</a></li>
      <li><a href="/logout">Logout</a></li>
    </ul>
  </div>
</nav>


