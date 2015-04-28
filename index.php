<!-- this comment is for milestone 3 bc no code was used in that video -->
<html>
<head>
	<title>
		TO DO LIST 2.0
	</title>
	<link rel="icon" src="">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<nav> 
  		<a class="link" href="login.php">Login</a>
  		<a class="link" href="register.php">Register</a>
  		<a class="link" href="/../php/controller/logout-user.php">Log-out</a>
	</nav>
</head>
<body>
	<div class="wrap">
		<div class="task-list">
		<ul>
			<?php require("includes/connect.php"); 
			$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
			$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
			if ($results = $mysqli->query($query)) {
				$numrows = $results->num_rows;
				if ($numrows>0) {
					while ($row = $results->fetch_assoc()) {
						$task_id = $row['id'];
						$task_name = $row['task'];

						echo '<li class="bottom">
						<span class="right">'.$task_name. '</span>
						<img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg"/>
						</li>';
					}
				}
			}

			?>
		</ul>
	
	</div>
	<form class="add-new-task" autocomplete="off">
		<input type="text" name="new-task" placeholder="Add new item..."/>
	</form>
	</div>
</body>
<script src="hhtp://code.jquery.com/jquery-latest.min.js"></script>
<script>
	add_task(); 

	function add_task(){
		$('.add-new-task').submit(function() {
			var new_task = $('.add-new-task input[name=new-task').val();

			if (new_task != '') {
					$.post('includes/add-task.php', {task: new_task}, function(data) {
						$('add-new-task input[name=new-task']).val();
							$(data).appendTo('task-list ul').hide().fadeIn();
					});
			}
			return false;
		});
	}

	$('.delete-button').click(function(){
		var current_element = $(this);
		var task_id = $(this).attr['id'];

		$.post('includes/delete-task.php'. {id: task_id}, function(){
		current_element.parent().fadeOut("fast", function(){
		 $(this).remove();
		});
	});
});
</script>

</html>