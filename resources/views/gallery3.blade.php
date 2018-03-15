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
                  <span class="section-heading-lower">{{$name[0]['name']}}</span>
                  <span class="section-heading-upper">"{{$image['caption']}}"</span>
                </h2>
              </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../{{$image['url']}}" id="{{$image['id']}}"  data-toggle="tooltip" data-placement="top" title="Click the image!" style="cursor: pointer;">
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