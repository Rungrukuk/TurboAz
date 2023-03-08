<?php
include "includes/header.php";
?>

<a style="font-size: large" class="btn btn-primary" href="edit-carinfo.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New
	Carinfo</a>

<h1 style="font-size: 25px">Carinfo</h1>
<p style="font-size: 20px">This table includes
	<?php echo counting("carinfo", "id"); ?> carinfo.
</p>
<?php if (isset($_GET['error'])) {
    ?>
      <div style="font-size: medium; width: 9.3%" class="alert alert-danger" role="alert">
        <?php echo $_GET['error']; ?>
      </div>
    <?php } ?>
    <?php if (isset($_GET['success'])) { ?>
      <div style="font-size: medium; width: 8.5%" class="alert alert-success" role="alert">
        <?php echo $_GET['success']; ?>
      </div>
    <?php } ?>


<table style="font-size: large" id="sorted" class="table table-striped table-bordered">
	<thead style="font-size: large" style="height: 30px;">
		<tr style="font-size: large">
			<th style="font-size:11px">Id</th>
			<th style="font-size:11px">Email</th>
			<th style="font-size:11px">Marka</th>
			<th style="font-size:11px">Model</th>
			<th style="font-size:11px">Bannovu</th>
			<th style="font-size:11px">Yurus</th>
			<th style="font-size:11px">Reng</th>
			<th style="font-size:11px">Qiymet</th>
			<th style="font-size:11px">Yanacaq</th>
			<th style="font-size:11px">Oturucu</th>
			<th style="font-size:11px">Suretqutusu</th>
			<th style="font-size:11px">Buraxilisili</th>
			<th style="font-size:11px">Muherrikinhecmi</th>
			<th style="font-size:11px">Muherrikingucu</th>
			<th style="font-size:11px">Elavemelumat</th>
			<th style="font-size:11px">Img name</th>
			<th style="font-size:11px">Status</th>
			<th style="font-size:11px">Img name2</th>

			<th style="font-size:11px" class="not">Edit</th>
			<th style="font-size:11px" class="not">Delete</th>
		</tr>
	</thead>

	<?php
	$carinfo = getAll("carinfo");
	if ($carinfo)
		foreach ($carinfo as $carinfos) :
	?>
		<tr>
			<td style="font-size:15px">
				<?php echo $carinfos['id'] ?>
			</td>
			<td style="font-size:15px"><a href="show-Images.php?index=<?php echo $carinfos['id'] ?>"><?php echo $carinfos['email'] ?></a></td>
			<td style="font-size:15px">
				<?php echo $carinfos['marka'] ?>
			</td >
			<td style="font-size:15px">
				<?php echo $carinfos['model'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['bannovu'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['yurus'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['reng'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['qiymet'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['yanacaq'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['oturucu'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['suretqutusu'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['buraxilisili'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['muherrikinhecmi'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['muherrikingucu'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['elavemelumat'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['img_name'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['status'] ?>
			</td>
			<td style="font-size:15px">
				<?php echo $carinfos['img_name2'] ?>
			</td>


			<td><a href="edit-carinfo.php?act=edit&id=<?php echo $carinfos['id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
			<td><a href="save.php?act=delete&id=<?php echo $carinfos['id'] ?>&cat=carinfo" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>
	<?php endforeach; ?>
</table>
<?php include "includes/footer.php"; ?>