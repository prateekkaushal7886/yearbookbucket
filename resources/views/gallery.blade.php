
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

<style type="text/css">
body {
  background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
  min-height: 100vh;
  font: normal 16px sans-serif;
}

.gallery-container h1 {
  text-align: center;
  margin-top: 70px;
  font-family: 'Droid Sans', sans-serif;
  font-weight: bold;
  color: #58595a;
}

.gallery-container p.page-description {
  text-align: center;
  margin: 30px auto;
  font-size: 18px;
  color: #85878c;
}

.tz-gallery {
  padding: 40px;
}

.tz-gallery .thumbnail {

  padding: 0;
  margin-bottom: 0px;
  background-color: #fff;
  border-radius: 4px;
  border: none;
  transition: 0.15s ease-in-out;
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.tz-gallery .thumbnail:hover {
  transform: translateY(-10px) scale(1.02);
}

.tz-gallery .lightbox img {
  border-radius: 4px 4px 0 0;
}

.tz-gallery .caption{
  padding: 26px 30px;
  text-align: center;
}

.tz-gallery .caption h3 {
  font-size: 14px;
  font-weight: bold;
  margin-top: 0;
}

.tz-gallery .caption p {
  font-size: 12px;
  color: #7b7d7d;
  margin: 0;
}

.baguetteBox-button {
  background-color: transparent !important;
}


*, *:before, *:after {box-sizing:  border-box !important;}


.row {
 -moz-column-width: 18em;
 -webkit-column-width: 18em;
 -moz-column-gap: 1em;
 -webkit-column-gap:1em; 

}

.item {
 display: inline-block;
 padding:  .25rem;
 width:  100%; 
}

.well {
 position:relative;
 display: block;
}


</style>

@if(count($images))
<div class="container">
  <br>

  <div class="row">
    <div class="tz-gallery">
     @foreach($images as $caption=>$url)
     @if(file_exists($url))
     <div class="item">
      <div class="well"> 
       <div class="thumbnail" >
        <a class="lightbox" href="{{$url}}">
          <div >
            <img src="{{$url}}" class="img-responsive">
          </div>
        </a>
        <div class="caption">
          <p>{{$caption}}</p>
        </div>
      </div>
    </div>
  </div>
  @endif
  @endforeach
</div>
</div>
<br>
</div>
@endif


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
  baguetteBox.run('.tz-gallery');
</script>