<!DOCTYPE html>
<html>
<head>
	<title>OpenTok</title>
	<style type="text/css">
		ul {
			display:flex;  
			list-style:none;
			width: 100%;
		}
		ul li {
			padding: 60px;
			border: 1px solid;
			margin:5px;
			background-color: #ccc;
		}
		ul li a {
			font-size: 24px;
		}
	</style>
</head>
<body>
	<div>
		<ul>
			<li><a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>?room=ROOM1">Room 1</a></li>
			<li><a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>?room=ROOM2">Room 2</a></li>
			<li><a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>?room=ROOM3">Room 3</a></li>
		</ul>
	</div>
	<div id="otEmbedContainer" style="width:800px; height:640px"></div>
	<script src="https://tokbox.com/embed/embed/ot-embed.js?embedId=04389509-8f81-4f25-8ed4-cd904004b5f9&room=<?php echo isset($_GET['room']) ? $_GET['room'] : 'DEFAULT_ROOM'; ?>"></script>
</body>
</html>