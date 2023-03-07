<?php
include "includes/header.php";
?>

<a class="btn btn-primary" href="edit-carinfo.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New
	Carinfo</a>

<h1>Carinfo</h1>
<p>This table includes
	<?php echo counting("carinfo", "id"); ?> carinfo.
</p>

<table id="sorted" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Email</th>
			<th>Marka</th>
			<th>Model</th>
			<th>Bannovu</th>
			<th>Yurus</th>
			<th>Reng</th>
			<th>Qiymet</th>
			<th>Yanacaq</th>
			<th>Oturucu</th>
			<th>Suretqutusu</th>
			<th>Buraxilisili</th>
			<th>Muherrikinhecmi</th>
			<th>Muherrikingucu</th>
			<th>Elavemelumat</th>
			<th>Img name</th>
			<th>Status</th>
			<th>Img name2</th>

			<th class="not">Edit</th>
			<th class="not">Delete</th>
		</tr>
	</thead>

	<?php
	$carinfo = getAll("carinfo");
	if ($carinfo)
		foreach ($carinfo as $carinfos):
			?>
			<tr>
				<td>
					<?php echo $carinfos['id'] ?>
				</td>
				<td><a href="show-Images.php?index=<?php echo $carinfos['id'] ?>"><?php echo $carinfos['email'] ?></a></td>
				<td>
					<?php echo $carinfos['marka'] ?>
				</td>
				<td>
					<?php echo $carinfos['model'] ?>
				</td>
				<td>
					<?php echo $carinfos['bannovu'] ?>
				</td>
				<td>
					<?php echo $carinfos['yurus'] ?>
				</td>
				<td>
					<?php echo $carinfos['reng'] ?>
				</td>
				<td>
					<?php echo $carinfos['qiymet'] ?>
				</td>
				<td>
					<?php echo $carinfos['yanacaq'] ?>
				</td>
				<td>
					<?php echo $carinfos['oturucu'] ?>
				</td>
				<td>
					<?php echo $carinfos['suretqutusu'] ?>
				</td>
				<td>
					<?php echo $carinfos['buraxilisili'] ?>
				</td>
				<td>
					<?php echo $carinfos['muherrikinhecmi'] ?>
				</td>
				<td>
					<?php echo $carinfos['muherrikingucu'] ?>
				</td>
				<td>
					<?php echo $carinfos['elavemelumat'] ?>
				</td>
				<td>
					<?php echo $carinfos['img_name'] ?>
				</td>
				<td>
					<?php echo $carinfos['status'] ?>
				</td>
				<td>
					<?php echo $carinfos['img_name2'] ?>
				</td>


				<td><a href="edit-carinfo.php?act=edit&id=<?php echo $carinfos['id'] ?>"><i
							class="glyphicon glyphicon-edit"></i></a></td>
				<td><a href="save.php?act=delete&id=<?php echo $carinfos['id'] ?>&cat=carinfo"
						onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
			</tr>
		<?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>