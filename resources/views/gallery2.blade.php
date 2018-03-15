<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
<script type="text/javascript">

</script>
<style type="text/css">
</style>


@if(count($images))
<div class="container animated zoomInLeft">
  <br>
  <div class="row">
    @foreach($images as $image)
    @if(file_exists($image['url']))
    <div class="col-lg-4 col-sm-12 col-md-4">
      <div class="card" style="margin-bottom: 12px;" data-toggle="tooltip" data-placement="top" title="Click the image!">
        <div class="card-body">
         <img height="200px" width="300px" src="../{{$image['url']}}" id="{{$image['id']}}">
       </div>
       <div class="card-footer">
        <p style="text-align: center;">
          <strong >"{{$image['caption']}}"</strong>
        </p>
      </div>
    </div>
  </div>
  @endif
  @endforeach
</div>
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
