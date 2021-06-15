<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="{{ asset('/css/inslide.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<div class="companybrand"><img class="companylogo" src="/images/nike.png" />
<span class="companytitle">Company title</span>
<span></span>
</div>
<div class="content-width">
  <div class="slideshow">
    <!-- Slideshow Items -->
    <div class="slideshow-items">
  
  @foreach ($project->slide as $slide)
  
  <img src="/storage/{{$slide->image}}">
  {{$slide->title}}
  {{$slide->description}}
  
  @endforeach

    <div class="controls">
      <ul>
        <li class="control" data-index="0"></li>
        <li class="control" data-index="1"></li>
        <li class="control" data-index="2"></li>
      </ul>
    </div>
  </div>
</div>
</body>

</html>
<script src="/javascript/inslide.js"></script>