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
			<?php require("includes/connect.php"); 
			$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
			$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
			if ($results = $mysqli->query($query)) {
				$numrows = $result->num_rows;
				if ($numrows>0) {
					while ($row = $results->fetch_assoc()) {
						$task_id = $row['id'];
						$task_name = $row['task'];

						echo "<li>
						<span>'.$task_name.' </span>
						<span>'.$task_name'
						";
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