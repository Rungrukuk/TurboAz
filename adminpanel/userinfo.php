<?php
include "includes/header.php";
?>

<a class="btn btn-primary" href="edit-userinfo.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New
	Userinfo</a>

<h1>Userinfo</h1>
<p>This table includes
	<?php echo counting("userinfo", "id"); ?> userinfo.
</p>

<table id="sorted" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Fullname</th>
			<th>Email</th>
			<th>Number</th>
			<th>City</th>
			<th>Password</th>

			<th class="not">Edit</th>
			<th class="not">Delete</th>
		</tr>
	</thead>

	<?php
	$userinfo = getAll("userinfo");
	if ($userinfo)
		foreach ($userinfo as $userinfos) :
	?>
		<tr>
			<td>
				<?php echo $userinfos['id'] ?>
			</td>
			<td>
				<?php echo $userinfos['fullname'] ?>
			</td>
			<td>
				<?php echo $userinfos['email'] ?>
			</td>
			<td>
				<?php echo $userinfos['number'] ?>
			</td>
			<td>
				<?php echo $userinfos['city'] ?>
			</td>
			<td>
				<?php echo $userinfos['password'] ?>
			</td>


			<td><a href="edit-userinfo.php?act=edit&id=<?php echo $userinfos['id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
			<td><a href="save.php?act=delete&id=<?php echo $userinfos['id'] ?>&cat=userinfo" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>
	<?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>