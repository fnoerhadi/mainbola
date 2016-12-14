<h2><?php echo $title; ?></h2>

<?php echo form_open('teams/update/'.$teams_profile['slug']);?>

	<!--<label for="id">ID</label>-->
    <input type="hidden" name="id" value = "<?php echo $teams_profile['id']?>"/><br />

    <label for="name">Team Name</label>
    <input type="input" name="name" value = "<?php echo $teams_profile['name']?>"/><br />
	
	<label for="city">City</label>
    <input type="input" name="city" value = "<?php echo $teams_profile['city']?>"/><br />
	
	<label for="homeBase">Home Base</label>
    <input type="input" name="homeBase" value = "<?php echo $teams_profile['homeBase']?>"/><br />
	
	<label for="founded">Date Founded</label>
    <input type="date" name="founded" value = "<?php echo $teams_profile['founded']?>"/><br />
	
	<label for="teamWebsite">Team Website</label>
    <input type="url" name="teamWebsite" value = "<?php echo $teams_profile['teamWebsite']?>"/><br />
	
	<label for="homeKitColor">Home Kit Color</label>
    <input type="color" name="homeKitColor" value = "<?php echo $teams_profile['homeKitColor']?>" /><br />
	
	<label for="awayKitColor">Away Kit Color</label>
    <input type="color" name="awayKitColor" value = "<?php echo $teams_profile['awayKitColor']?>"/><br />
	
	<label for="description">Description</label>
    <textarea name="description" rows = '10' cols = "30" value = "<?php echo $teams_profile['description']?>"></textarea><br />
	
	<label for="awards">Awards</label>
    <textarea name="awards" rows = '10' cols = "30"value = "<?php echo $teams_profile['awards']?>"></textarea><br />
	
	<label for="sponsor">Sponsor</label>
    <input type="input" name="sponsor" value = "<?php echo $teams_profile['sponsor']?>"/><br />
	
	<label for="sponsorWebsite">Sponsor Website</label>
    <input type="url" name="sponsorWebsite" value = "<?php echo $teams_profile['sponsorWebsite']?>"/><br />

	

    <input type="submit" name="submit" value="Update team" />

</form>
