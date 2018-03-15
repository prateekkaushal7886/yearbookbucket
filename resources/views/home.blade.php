<!DOCTYPE html>

<html>

<head>

  <title>YB|Home</title>

  <style type="text/css">

  .btn{

    font-size: 15px !important;    

    margin-top: 10px;   

    padding: 5px;   

  }

  .back { 

    /* The image used */

    background-image: url("12.jpg");



    /* Set a specific height */

    height: 500px; 



    /* Create the parallax scrolling effect */

    background-attachment: fixed;

    background-position: center;

    background-repeat: no-repeat;

    background-size: cover;

  }







  

  h4

  {

    color: white;

  }

  body

  {

    background-image: url('13.jpg');

    background-attachment: fixed;

    background-position: center;

    background-repeat: no-repeat;

    background-size: cover;

  }

  .countdown-wrapper {
    position: relative;
    height: 200px;
  }
  @font-face{
   font-family:'digital-clock-font';
   src: url('clock.ttf');
 }
 #countdown, #countdown-text {
  width: 700px;
  font-family: 'digital-clock-font';;
  margin: 0;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
}        

.countdown {
  font-weight: 900;
  font-size: 140px;
  color: black;
  opacity: .7;
  letter-spacing: -4px;
}

.counter-text {
  font-weight: 900;
  font-size: 40px;
  color: black;
  opacity: .8;
  text-align: center;
}


.timer {
  display: inline-block;
  margin: 10px;
}


</style>

</head>

@include('navbar2')

<br>

<body>


  <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
  <div class="container parallax" >





    @if(session('message'))

    <script type="text/javascript">

      alert('<?php echo(session('message'));?>');

    </script>

    @endif



    <div class="back" style="border: 1px solid grey;">



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

                <img src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/shot.jpg';}?>" alt="" class="rounded-circle img-responsive" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">

                <div class="input-field col sm-12 lg-12 md-12">

                  <div class="form-group">

                    <label for="comment">Caption (Max 50 characters)</label>

                    <textarea name="motto" id="icon_prefix2" class="form-control" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50" rows="2" id="comment"><?php if (!empty(Auth::user()->view_self)) { echo Auth::user()->view_self;}else {echo 'Enter Your Caption Here';}?></textarea>

                  </div>



                </div>

                <input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="width: 150px;" id="imgsave">

              </form>

            </div>

          </div>



        </div>

      </div>

      <div class="row">

        <div class="col-lg-4">

          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal2" style=" padding-top: 0;padding-left: 25px;padding-right: 25px;">Upload Profile Picture and Caption

          </button>

        </div>

        <div class="col-lg-4 offset-lg-4">





          <button id="btnn1" class="waves-effect waves-light btn" style="float: right;width: 150px;padding: 0 ;margin-right: 20px;" onclick="javascript:introJs().start();">Tutorial<i class="material-icons" >help</i></button>

          <button id="btnn2" class="btn-floating" style="float: right;padding: 0;margin-right: 20px;display: none;" onclick="javascript:introJs().start();" title="Tutorial"><i class="material-icons" >help</i></button>



        </div>

      </div>



      <br>

      <div  class="row align-items-center justify-content-center" >

        <figure>

          <a data-toggle="modal" data-target="#modal2" ref="#">

            <img src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/your.jpg';}?>" class="rounded-circle img-responsive" width="200px" height="200px" data-step="1" data-intro="Click on image to Upload Profile pic and Caption"> 

          </a>

          <figcaption style="text-align: center;color: white;"><h4> 

            <?php echo Auth::user()->name;  ?>

          </h4></figcaption>

          <figcaption style="text-align: center;color: white;"><h5>"

            <?php if (!empty(Auth::user()->view_self)) { echo Auth::user()->view_self;}

            else{

              echo "Upload your Caption for the Yearbook";

            }

            ?> "

          </h5></figcaption>

        </figure>

        <br>





      </div>

      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-6">

          <a class='btn btn-primary' href='/writeup' style="width: 100%;height: 80%;" data-step="4" data-intro="Share your interesting memories with us">Write Article</a>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">

          <a class='btn btn-primary' href='/upload' style="width: 100%;height: 80%;" data-step="5" data-intro="Upload some Funny photos of you and your friend">Upload Photo</a>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">

          <a class='btn btn-primary' style="width: 100%;height: 80%;font-size: 2px;" href="http://www.sac.iitkgp.ac.in/team.php">Contact Us</a>

        </div>

      </div>

      <br/>

    </div>

    <br><hr><br>


        <div class="countdown-wrapper">
      <div id="countdown-text">
        <div class="timer">
          <div id="daysTicker" class="countdown"></div>
          <div class="counter-text">DAYS</div>
        </div>
        <div class="timer">
          <div id="hoursTicker" class="countdown"></div>
          <div class="counter-text">HOURS</div>
        </div>
        <div class="timer">
          <div id="minsTicker" class="countdown"></div>
          <div class="counter-text">MINS</div>
        </div>
        <div class="timer">
          <div id="secsTicker" class="countdown"></div>
          <div class="counter-text">SECS</div>
        </div>
       
      </div>

    </div>
    
    <div class="row">

      <div  class="col-sm-12 col-lg-6 card-panel grey lighten-5 z-depth-1" align="center" style="min-height: 270px;padding: 10px;height: 100%;"><h5>Yearbook</h5><div style="padding-right: 15px;padding-left: 15px;"><p style="text-align: justify;"> The yearbook is an opus of memories that you would carry along graduating from the institute. The wonderful years spent in the campus are engraved and expressed via photographs and writeups in this departing souvenir from IIT KGP. 

      With an assortment of your thoughts and snaps from various experiences through the years, the book truly collaborates your time in KGP and is a walk down your memory lane every time you look through it.</p> </div></div>

      <div class="col-lg-6 col-sm-12 card-panel grey lighten-5 z-depth-1" align="center" style="min-height: 270px;padding: 10px;"><h5>Previous Yearbooks</h5> <br>

        <div class="row">

          <div class="col-lg-4 col-sm-4"><img src="ind/year16.jpg" width="100%" alt=""/></div>

          <div class="col-lg-4 col-sm-4"> <img src="ind/year2015.jpg" width="100%"  alt=""/></div>

          <div class="col-lg-4 col-sm-4"> <img src="ind/year2014.jpg" width="100%"  alt=""/></div>

        </div>

      </div>



    </div>

  </div>



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



            </script>





            <script type="text/javascript">





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



              $(document).ready(function() {

                $('#dropdown_button').hover(function(){

                  $('.dropdown-toggle').dropdown()

                })



              });

              // Set the date we're counting down to
              var countDownDate = new Date("Mar 2, 2018 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000); 
  
  //Zeros
  var hours = (hours.toLocaleString(undefined,{minimumIntegerDigits: 2}));  
  
  var minutes = (minutes.toLocaleString(undefined,{minimumIntegerDigits: 2}));
  
  var seconds = (seconds.toLocaleString(undefined,{minimumIntegerDigits: 2}));
  

  
  // Display the result in the element with id="demo"
  document.getElementById("daysTicker").innerHTML = days;
  document.getElementById("hoursTicker").innerHTML = hours;
  document.getElementById("minsTicker").innerHTML = minutes;
  document.getElementById("secsTicker").innerHTML = seconds;
  
  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "THE CAMPAIGN BEGINS";
  }
}, 1000);






</script>





</body>

</html>

