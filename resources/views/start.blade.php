<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/assets/JiSlider.css">
		<style>
			* {
				margin: 0;
			}

			html, body {
				height: 100%;
			}

			#JiSlider {
				width: 100%;
				height: 100%;
			}
		</style>
    <title>jQuery JiSlider Plugin Demo</title>
</head>
	<body>
		<div id="JiSlider" class="jislider">
			<ul>
				@foreach ($project->slide as $slide)
				<li>
					<img src="/storage/{{$slide->image}}">
					<h3>{{$slide->title}}</h3>
					<h4>{{$slide->description}}</h4>
				</li>
				@endforeach
			
			</ul>
		</div>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="/assets/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>