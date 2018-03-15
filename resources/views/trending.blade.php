<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="icon" href="ind/fav.png" type="image/png" >
  <meta charset="utf-8">
  <title>YB|Trending</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <meta name="description" content="Photo uploader for Yearbook 2016, IIT Kharagpur. Designed and maintained by Students' Alumni Cell IIT Kharagpur.">
  <style>

  .pagination {
   justify-content: center;
}

  @font-face {
    font-family: 'Century gothic';
    src: url('font.ttf');
  }
  body
  {
    background-color: #333;
    background-repeat:repeat;
    padding-top: 0;

  }
  .container
  {font-family: Century gothic;
    background-color: silver;
    color: #333;
  }
  .preview {
    overflow: hidden;
    width: 200px; 
    height: 300px;
  }
</style>
</head>

<body>
@include('navbar2')


<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
<script type="text/javascript">
 
</script>
<style type="text/css">
.lead {
  padding: 40px 0;
}
/* Grid */

tbody {
    height: 400px;
    display: inline-block;
    width: 100%;
    overflow: auto;
}

#posts {
  margin: 30px auto 0;
}
.post {
  margin: 0 0 20px;
  text-align: center;
  width: 100%;
}
.post img {
  padding: 0 15px;
  width: 100%;
}
#grid.container .post img {
  padding: 0;
}
/* Medium devices */
@media (min-width: 768px) {
  #grid > #posts .post {
    width: 335px;
  }
  #grid > #posts .post.cs2 {
    width: 100%;
  }
  .post img {
    padding: 0;
  }
}
/* Medium devices */
@media (min-width: 992px) {
  #grid > #posts .post {
    width: 445px;
  }
  #grid > #posts .post.cs2 {
    width: 100%;
  }
}
/* Large devices */
@media (min-width: 1200px) {
  #grid > #posts .post {
    width: 100%;
  }
  #grid > #posts .post.cs2 {
    width: 742px;
  }
}
/* Large devices min-width (1200px) + a .post margin (50px) * 2 (100px) = 1300px */
/* 1300px gives me the clearance I need to keep the margins of the entire #grid (the
bleed if you will) the same width as the .post margins posts (50px). Basically I'm
being really picky about whitespace. If you don't care, no problem, just delete this.
Can this be done with Masonry options? */
@media (min-width: 1300px) {
  #grid {
    left: -50px;
    padding-left: 50px;
    padding-right: 50px;
    position: relative;
  }
  #grid.container {
    left: auto;
    padding-left: 15px;
    padding-right: 15px;
  }
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
<script type="text/javascript">

</script>
<style type="text/css">
</style>


@if(count($images))
<div class="container animated zoomInLeft">
  <br>
{{ $images->links('vendor.pagination.bootstrap-4')}}

@php
$count= 0;
@endphp

  <div class="row">
    @foreach($images as $image)
    @if(file_exists($image['url']))
    <div class="col-lg-12 col-sm-12 col-md-4">
      <div class="card" style="margin-bottom: 12px;" data-toggle="tooltip" data-placement="top" title="Click the image!">
        <div class="card-body">
         <img  width="100%" src="{{$image['url']}}" id="{{$image['id']}}">
       </div>
       <div class="card-footer">
        <p style="text-align: center;">
    <strong>
      @php
      echo '#';
      $count1 = $count + ($currentpage*$perpage ) -($perpage-1);
      echo $count1 ;
      $count++;
      @endphp
    </strong>
    <br>
    <strong >"{{$image['caption']}}"</strong>

     @php
      $name = App\User::where('rollno',$image['rollno'])->get()->toArray();

     @endphp
     <br>
    <strong>{{$name[0]['name']}}</strong>
      <br>
      
      <!-- carbon class used -->
      <strong>{{$image['created_at']->diffForHumans() }}</strong>
        </p>
      </div>
    </div>
  </div>
  @endif
  @endforeach
</div>
<br>
{{ $images->links('vendor.pagination.bootstrap-4')}}
<br>
</div>

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
@endif
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
   // Takes the gutter width from the bottom margin of .post
   var gutter = parseInt($('.post').css('marginBottom'));
   var container = $('#posts');
 // Creates an instance of Masonry on #posts
 container.masonry({
   gutter: gutter,
   itemSelector: '.post',
   columnWidth: '.post'
 });
 // This code fires every time a user resizes the screen and only affects .post elements
 // whose parent class isn't .container. Triggers resize first so nothing looks weird.
 $(window).bind('resize', function() {
  if (!$('#posts').parent().hasClass('container')) {
     // Resets all widths to 'auto' to sterilize calculations
     post_width = $('.post').width() + gutter;
     $('#posts, body > #grid').css('width', 'auto');
     // Calculates how many .post elements will actually fit per row. Could this code be cleaner?
     posts_per_row = $('#posts').innerWidth() / post_width;
     floor_posts_width = (Math.floor(posts_per_row) * post_width) - gutter;
     ceil_posts_width = (Math.ceil(posts_per_row) * post_width) - gutter;
     posts_width = (ceil_posts_width > $('#posts').innerWidth()) ? floor_posts_width : ceil_posts_width;
     if (posts_width == $('.post').width()) {
       posts_width = '100%';
     }
     // Ensures that all top-level elements have equal width and stay centered
     $('#posts, #grid').css('width', posts_width);
     $('#grid').css({
       'margin': '0 auto'
     });
   }
 }).trigger('resize');
 $(function() {
  $('img').on('click', function() {
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
</script>


</body>

</html>

