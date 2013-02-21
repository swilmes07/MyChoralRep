<?php
include('lock.php');
$program = $_GET['id'];
	
	if(!isset($program)):
		//redirect
	else:
		$sql = mysql_query("SELECT * FROM programs WHERE Program_ID=1");
		$program_information = mysql_fetch_array($sql, MYSQL_ASSOC);
		
		$sql2 = mysql_query("SELECT * FROM songs WHERE Program_ID=1");
		while($row = mysql_fetch_array($sql2, MYSQL_ASSOC))
		{
			$songs[] = $row;
		}
		
	endif;
	
	if(isset($program_information) && !empty($songs)):
	?>
		<div id="content">
			<h1><?php print $program_information['Program_Name']; ?></h1>
			<h2><?php print $program_information['Program_Date']; ?></h2>
				<ul>
					<?php foreach($songs as $song): ?>					
						<li>
							<?php print $song['Song_Name']; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
	<?php else: ?>
		
	<?php endif; ?>
	
	



	




