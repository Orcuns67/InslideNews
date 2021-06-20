<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="{{ asset('/css/inslider.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Project</title>
</head>

<body>
<div class="companybrand">
<span class="companytitle">Swiss Barbers</span>
<span></span>
</div>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  @foreach ($project->slide as $slide)
  <div class="mySlides fade">
    <img src="/storage/{{$slide->image}}" class="imgslider">
    <span class="textslider" >
    <h3 class="titleslider">{{$slide->title}}</h3>
    <h4 class="descslider">{{$slide->description}}</h4>
  </span>
  </div>
  @endforeach

  <!-- Next and previous buttons -->
  
</div>
<br>

<!-- The dots/circles -->

</body>

</html>
<script src="/javascript/inslider.js"></script>