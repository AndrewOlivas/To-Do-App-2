<!-- this comment is for milestone 3 bc no code was used in that video -->
<html>
<head>
	<title>
		TO DO LIST 2.0
	</title>
	<link rel="stylesheet" type="text/css" href="css/main">
</head>
<body>
	<div class="wrap">
		<ul>
			<php require("includes/connect.php"); ?>
		</ul>
	
	</div>
	<form class="add-new-task" autocomplete="off">
		<input type="text" name="new-task" placeholder="Add new item..."/>
	</form>
	</div>
</body>
</html>