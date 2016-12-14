
<html>
	<head>
		<title>mainbola | tempatnya main bola amatir</title>
	</head>
	<body>
		<h1><?php echo $title; ?></h1>
		<div class = "page_tab">
			<a href ="<?php echo site_url('teams/create'); ?>">Create Team</a> |
		</div>
	<?php foreach ($teams as $teams_item): ?>
		<ul>
			<li>
				<h3>
					<a href="<?php echo site_url('teams/'.$teams_item['slug']); ?>">
					<?php echo $teams_item['name']; ?>
					</a>
				</h3>
			</li>
		</ul>
			
			<?php //$team_url = url_title($teams_item['name']);?>

	<?php endforeach; ?>
	
	

		
	</body>
</html>
