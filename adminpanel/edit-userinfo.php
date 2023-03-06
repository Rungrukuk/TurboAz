<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$userinfo = getById("userinfo", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Userinfo</legend>
						<input name="cat" type="hidden" value="userinfo">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Fullname</label>
							<input class="form-control" type="text" name="fullname" value="<?=$userinfo['fullname']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$userinfo['email']?>" /><br>
							
							<label>Number</label>
							<input class="form-control" type="text" name="number" value="<?=$userinfo['number']?>" /><br>
							
							<label>City</label>
							<input class="form-control" type="text" name="city" value="<?=$userinfo['city']?>" /><br>
							
							<label>Password</label>
							<input class="form-control" type="text" name="password" value="<?=$userinfo['password']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				