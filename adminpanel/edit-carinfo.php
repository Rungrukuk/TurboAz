<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$carinfo = getById("carinfo", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Carinfo</legend>
						<input name="cat" type="hidden" value="carinfo">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$carinfo['email']?>" /><br>
							
							<label>Marka</label>
							<input class="form-control" type="text" name="marka" value="<?=$carinfo['marka']?>" /><br>
							
							<label>Model</label>
							<input class="form-control" type="text" name="model" value="<?=$carinfo['model']?>" /><br>
							
							<label>Bannovu</label>
							<input class="form-control" type="text" name="bannovu" value="<?=$carinfo['bannovu']?>" /><br>
							
							<label>Yurus</label>
							<input class="form-control" type="text" name="yurus" value="<?=$carinfo['yurus']?>" /><br>
							
							<label>Reng</label>
							<input class="form-control" type="text" name="reng" value="<?=$carinfo['reng']?>" /><br>
							
							<label>Qiymet</label>
							<input class="form-control" type="text" name="qiymet" value="<?=$carinfo['qiymet']?>" /><br>
							
							<label>Yanacaq</label>
							<input class="form-control" type="text" name="yanacaq" value="<?=$carinfo['yanacaq']?>" /><br>
							
							<label>Oturucu</label>
							<input class="form-control" type="text" name="oturucu" value="<?=$carinfo['oturucu']?>" /><br>
							
							<label>Suretqutusu</label>
							<input class="form-control" type="text" name="suretqutusu" value="<?=$carinfo['suretqutusu']?>" /><br>
							
							<label>Buraxilisili</label>
							<input class="form-control" type="text" name="buraxilisili" value="<?=$carinfo['buraxilisili']?>" /><br>
							
							<label>Muherrikinhecmi</label>
							<input class="form-control" type="text" name="muherrikinhecmi" value="<?=$carinfo['muherrikinhecmi']?>" /><br>
							
							<label>Muherrikingucu</label>
							<input class="form-control" type="text" name="muherrikingucu" value="<?=$carinfo['muherrikingucu']?>" /><br>
							
							<label>Elavemelumat</label>
							<input class="form-control" type="text" name="elavemelumat" value="<?=$carinfo['elavemelumat']?>" /><br>
							
							<label>Img name</label>
							<input class="form-control" type="text" name="img_name" value="<?=$carinfo['img_name']?>" /><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$carinfo['status']?>" /><br>
							
							<label>Img name2</label>
							<input class="form-control" type="text" name="img_name2" value="<?=$carinfo['img_name2']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				