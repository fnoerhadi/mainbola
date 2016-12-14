<html>
	<head>
		<title>mainbola | tempatnya main bola amatir</title>
	</head>
	<body>
		<div class = "page_tab">
			<a href ="<?php echo site_url('teams/'.$teams_profile['slug']); ?>">Team Overview</a> |
			<a href ="#">Squad List</a> |
			<a href ="#">Recent Matches</a> |
			<a href ="#">League History</a> |
			<a href ="<?php echo site_url('teams/update/'.$teams_profile['slug']); ?>">Update Profile</a> |
		</div>
		
		<div class = "team_photo">
			<img src="" alt="" style="">
		</div>
		
		<h2> <?php echo $teams_profile['name'];?></h2>
		
		<div class="main">
			<table style = "border: 1px solid black; width:50%; text-align: left">
				<tr>
					<th>Team Informations</th>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $teams_profile['city'];?></td>
				</tr>
				<tr>
					<td>Home Base</td>
					<td><?php echo $teams_profile['homeBase'];?></td>
				</tr>
				<tr>
					<td>Founded</td>
					<td><?php echo $teams_profile['founded'];?></td>
				</tr>
				<tr>
					<td>Logo</td>
					<td><?php echo $teams_profile['logoPath'];?></td>
				</tr>
				<tr>
					<td>Team Website</td>
					<td><?php echo $teams_profile['teamWebsite'];?></td>
				</tr>
				<tr>
					<td>Home Kit Color</td>
					<td><?php echo $teams_profile['homeKitColor'];?></td>
				</tr>
				<tr>
					<td>Away Kit Color</td>
					<td><?php echo $teams_profile['awayKitColor'];?></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><?php echo $teams_profile['description'];?></td>
				</tr>
				<tr>
					<td>Awards</td>
					<td><?php echo $teams_profile['awards'];?></td>
				</tr>
				<tr>
					<td>Sponsor</td>
					<td><?php echo $teams_profile['sponsor'];?></td>
				</tr>
				<tr>
					<td>Sponsor Website</td>
					<td><?php echo $teams_profile['sponsorWebsite'];?></td>
				</tr>
			</table>
		</div>
	</body>
</html>
