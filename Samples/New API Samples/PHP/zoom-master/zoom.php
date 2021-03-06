<?PHP
if(isset($_GET['hand']))
{
$hand = $_GET['hand'];
$id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<title>jQuery Zoom Demo</title>
	<style>
		/* styles unrelated to zoom */
		* { border:0; margin:0; padding:0; }
		p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; }
	</style>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
	<script src='jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			$('#ex2').zoom({ on:'grab' });
			$('#ex3').zoom({ on:'click' });			 
			$('#ex4').zoom({ on:'toggle' });
		});
	</script>
</head>
<body>

	<span class='zoom' id='ex3'>
		<?PHP
			echo "<img src='../upload/".$id."/".$id."_".$hand;
			echo "_hand.jpg' width='490' height='490' alt=''/>";
		?>
		<p>Click to activate</p>
	</span>

</body>
</html>
