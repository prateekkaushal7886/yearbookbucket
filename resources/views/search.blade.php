
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>YB|Find Friend</title>
  <link rel="icon" href="../ind/fav.png" type="image/png" >
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="../animate.css">
  <script type="text/javascript" src="../js/intro.min.js"></script>
  <link type="text/css" rel="stylesheet" href="../css/introjs.min.css"  media="screen,projection"/>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


  <style type="text/css">
  body,html{
    max-width: 100%;
    overflow-x: hidden;
  }
  @font-face {
    font-family: 'Century gothic';
    src: url('font.ttf');
  }
  #nam
  {
    background-color: black;
  }
  body{
    background-color:#333;
    color: #fff;
    font-family: Century gothic;
  }
  .row{
    padding: 20px;
  }
  .card,.back{
    background-color: grey;
  }
  .introjs-tooltiptext{
    color: black;
  }
  .introjs-helperLayer {
    background-color: grey !important;
    opacity: 0.3;
  }
  .tabb
  {
    background-color: ;
  }
</style>
<script>
 $(document).ready(function(){
   if ($(window).width()>770) {
    (function($){ $('#nav').show();
     
  })(jQuery, undefined); }
  else{$('#nav').remove(); $('#mob_nav').show();
}
$(".button-collapse").sideNav();
});

 $(function() {
  $( "#name" ).autocomplete({
    source: 'search.php'
  });
});
</script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {


    $('#example').DataTable(
    {
     "columns": [
     
     { "searchable": false },
     
     null,
     { "searchable": false },
     { "searchable": false },
     { "searchable": false },
     
     
     ]
   });
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  } );
</script>
</head>
<body>
  <div class="container-fluid">
    @include('navbar1');



    <div>

      <button id="btnn1" class="waves-effect waves-light btn" style="float: right;width: 150px;padding: 0 ;margin-right: 20px;" onclick="javascript:introJs().start();">Tutorial<i class="material-icons" >help</i></button>
      <button id="btnn2" class="btn-floating " style="float: right;padding: 0 ;margin-right: 20px;display: none;" onclick="javascript:introJs().start();" title="Tutorial"><i class="material-icons" >help</i></button>
      <div class="container">

        <div class="col s12 m6">
          <div class="card darken-1 animated zoomInDown" data-step="1" data-intro="Search your friends and write something interesting about them ;p">
            <div class="card-content " style="text-align: center;">
              <span class="card-title ">Yearbook'17</span>
              <h5 style="cursor: default;">"Make the Yearbook yours"</h5>

              The most valued possession you take away from KGP: your friends. Search for your friend below to visit his/her profile and write a testimonial for them. This would be an amazing look back at your friendship several years from now.

              <div class="ui-widget " >
                
              </div></div></div>
              <div class="card  center animated zoomInUp" style="overflow-x: hidden;" data-step="2" data-intro="See friends suggestion here">

                <div class="row back" style="">

                 Search your friends by typing names on the search bar in the left<br>
                 
                 <div class="col-sm-9 tabb">
                   
                  <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                     
                     <tr>

                      <th>ID</th>
                      <th>NAME</th>
                      <th>DEPARTMENT</th>
                      <th>ROLL</th>
                      <th>WRITE</th>
                      


                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $data)
                    <tr>
                      <td id="nam">{{$data['id']}}</td>
                      <td id="nam">{{$data['name']}}</td>
                      <td id="nam">{{$data['department']}}</td>
                      <td id="nam">{{$data['rollno']}}</td>
                      <td id="nam"> <a href="/profile_index/{{$data['rollno']}}">
                        testimonial
                      </a></td>
                      
                      
                    </tr>
                    @endforeach

                  </tbody>
                </table>


              </div>

            </div>
          </div>
        </div>
      </div>
      
    </body>
    </html>