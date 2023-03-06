<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="admins.php">Admins</a></td>
					<td><?=counting("admins", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="carinfo.php">Carinfo</a></td>
					<td><?=counting("carinfo", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="userinfo.php">Userinfo</a></td>
					<td><?=counting("userinfo", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			