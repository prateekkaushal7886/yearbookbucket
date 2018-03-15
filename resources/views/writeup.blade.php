<html>
<head>
  <title>YB|Writeup</title>
  @include('navbar2')
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <script type="text/javascript" src="js/intro.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/introjs.min.css"  media="screen,projection"/>
  <script type="text/javascript">
    function showfield(name){
      if(name=='other')document.getElementById('div1').innerHTML='Write your Topic here: <input type="text" name="writeup" />';
      else document.getElementById('div1').innerHTML='';
    }

    $(document).ready(function() {
      $('select').material_select();
    });

    function showEdit(editableObj) {
      $(editableObj).css("background","#FFF");
    } 
    
    function saveToDatabase(editableObj,column,id) {
      $(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
      $.ajax({
        url: "/goa",
        type: "POST",
        data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
        success: function(data){
          $(editableObj).css("background","#FDFDFD");
        }        
      });
    }
  </script>
  <style type="text/css">
  @font-face {
    font-family: 'Century gothic';
    src: url('font.ttf');
  }
  html,body{
    max-width: 100%;
    overflow-x: hidden;
  }

  body
  {
    background-color: #333;
    
    background-size: cover;
    font-size: 15px;
    font-family: Century gothic;
  }

  table{
    table-layout: fixed !important;
  }  
  .introjs-tooltiptext{
    color: black;
  }
  .introjs-helperLayer {
    background-color: #333 !important;
    opacity: 0.3;
  }
  @media only screen and (max-width: 770px) {
    #btnn1{
      display: none;
    }
    #btnn2{
      display: block !important;
    }
  }

</style>
</head>
<body>
  <div class="container-fluid"> 
    <div>


      <button id="btnn1" class="waves-effect waves-light btn" style="float: right;width: 150px;padding: 0 ;margin-right: 20px;" onclick="javascript:introJs().start();">Tutorial<i class="material-icons" >help</i>
      </button>
      <button id="btnn2" class="btn-floating " style="float: right;padding: 0 ;margin-right: 20px;display: none;" onclick="javascript:introJs().start();" title="Tutorial">
        <i class="material-icons" >help</i>
      </button>

      <div class="container animated zoomInDown" style="display: table;margin-right: 0">

       <div class="row" style="display: table-row;">

        <div class="col s12 l12 m12 center">
         <h4 style="text-align:center;color:#ffffff ">Upload Articles</h4>

       </div>
     </div>
     <div class="row" data-step="1" data-intro="Submit your article here"><hr>
      <div class="col l12 s12 m12 center">How have all these years in KGP transformed you? What’s your funniest experience in the campus? Share with us your stories to make it a part of the yearbook that you carry along. Choose the topic below and send us your articles.</div><br><br><hr>

      <form action="/writeup" method="POST" >       {{ csrf_field() }}
       <input id="signup-token" type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="col l4 s6 m6 ">

        <select name="topic" id="topic" required onchange="showfield(this.options[this.selectedIndex].value)">
          <option selected disabled>Choose your topic</option>
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
    <div id="div1">

    </div>
    <div class="row">
      <div class="row">
        <div class="input-field col s12 l12 m12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="writeup" id="icon_prefix2" required class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Your Article here</label>
        </div>
      </div>
      <button type"submit" class="waves-effect waves-light btn" id="submit" required>SUBMIT</button>
    </div>
  </form>
  <div class="row center white" style="margin-top: 20px;color: #333;" data-step="2" data-intro="View/Edit/Delete your article. Click on field to edit">
    <h4 style="color: #707070;padding-top: 20px">Your WriteUp</h4><hr><hr>
    <table class="tbl-qa" style="color: #333;">
      <thead>
        <tr>

          <th class="table-header l2" width="10%" >SL-No.</th>
          <th class="table-header l3" width="150px">Topic</th>
          <th class="table-header l6" style="float: left;">Writeup<i class="material-icons" style="font-size: 20px;padding-left: 10px;width: 100%; ">mode_edit</i></th>
          <th class="table-header center l1"  width="50px"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $k=1;
             /* $query_select_view = " SELECT * from  writeup where rollno='$value1' ";
              $query_select_view_run = $connection->query($query_select_view);
              $k=1;
              while ($list = mysqli_fetch_assoc($query_select_view_run)) {  */
                ?>

                @foreach ( $writeups as $writeup)

                <tr class="table-row" style="border-bottom: 1px solid silver">
                  <td style="text-align: center;"> <?php echo $k; ?></td>
                  <td >{{ $writeup->topic }}</td>
                  <!--   <td contenteditable="true" onBlur="saveToDatabase(this,'writeup','{{ $writeup->id }}')" onClick="showEdit(this);">{{ $writeup->writeup }}</td>-->


                  <!-- refer  https://www.youtube.com/watch?v=HVW9_NSlIwA -->
                  <td onblur="update({{ $writeup->id }})" id="{{ $writeup->id }}" contenteditable >{{ $writeup->writeup }}</td>
                  <td style="width: 50px"><a href="/writeup/{{ $writeup->id }}"><i class="material-icons">delete</i></a></td>

                </tr>
                <?php $k++ ; ?>
                @endforeach
                <?php  
    /*
    $k++;
  }    */
  ?>
</tbody>
</table>

<hr>
</div>
</div>
</div>
</div>
</div>

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

</script>

</body>
</html>