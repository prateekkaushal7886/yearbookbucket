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

  </script>
</head>
<body>
  <br>
  <div class="container">
    <h1 style="text-align: center;">Upload Articles</h1>
    <hr>
    How have all these years in KGP transformed you? What’s your funniest experience in the campus? Share with us your stories to make it a part of the yearbook that you carry along. Choose the topic below and send us your articles.
    <hr>
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
        {{ $writeup->writeup }}</td>
        <td onblur="update({{ $writeup->id }})" id="{{ $writeup->id }}" contenteditable >{{ $writeup->writeup }}</td>
        <td style="width: 50px"><a href="/writeup/{{ $writeup->id }}"><i class="material-icons">delete</i></a></td>

      </tr>
      <?php $k++ ; ?>
      @endforeach
      <?php  
      
      ?>
    </tbody>
  </table>

</div>
<br>
<br>
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

</script>
</html>