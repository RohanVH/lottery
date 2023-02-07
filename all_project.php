<table class="table table-bordered table-hover project_table" style="font-weight: bold;">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src='tableeditor_dashboard.js' type='text/javascript'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src='tableeditor.js' type='text/javascript'></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


	<thead>

		<tr style="color:white;background-color:black;text-align:center">
			<th style="text-align:center;"><span class="fas fa-sort">ID</span></th>

			<th style="text-align:center;">AA</th>
			<th style="text-align:center;">BB</th>
			<th style="text-align:center;">CC</th>
			<th style="text-align:center;">A</th>
			<th style="text-align:center;">B</th>
			<th style="text-align:center;">C</th>
			<th style="text-align:center;">time</th>
			<th style="text-align:center;">date</th>
			<th style="text-align:center;">status</th>
			<th style="display:flex;justify-content:center;">Options</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$query = $db->query("SELECT * FROM randdata");
		$rows = $query->fetchAll(PDO::FETCH_OBJ);
		foreach ($rows as $row) {
			$id = $row->id;
			$AA = $row->AA;
			$BB = $row->BB;
			$CC = $row->CC;
			$A = $row->a;
			$B = $row->b;
			$C = $row->c;
			$time = $row->time;
			$date = $row->date;
			$status = $row->status;
		?>
			<tr style="text-align:center;">
				<td style="color:white;background-color:black;"><b><?php echo $id; ?></b></td>
				<td>
					<div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='AA_<?php echo $id; ?>'><b><?php echo $AA; ?></b></div>
				</td>
				<td>
					<div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='BB_<?php echo $id; ?>'><b><?php echo $BB; ?></b>
				</td>
				<td>
					<div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='CC_<?php echo $id; ?>'><b><?php echo $CC; ?></b>
				</td>
				<td>
					<div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='a_<?php echo $id; ?>'><b><?php echo $A; ?></b>
				</td>
				<td>
					<div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='b_<?php echo $id; ?>'><b><?php echo $B; ?></b>
				</td>
				<td>
					<div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='c_<?php echo $id; ?>'><b><?php echo $C; ?></b>
				</td>
				<td style="color:white;background-color:black;"><b><?php echo $time; ?></b></td>
				<td style="color:yellow;background-color:black;"><b><?php echo $date; ?></b></td>
				<td style="color:green;background-color:black;">
					<div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='status_<?php echo $id; ?>'><b><?php echo $status; ?></b>
				</td>
				</td>
				<td style="display:flex;justify-content:center;background-color:black;">
					<a class="btn btn-xs btn-danger" style="background-color:red;" onclick="return confirm('Are you sure you want to delete? ')" href="deleteproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php
		}
		?>
	</tbody>
	<style>
		tr:nth-child(even) {
			background-color: grey;
		}
	</style>
</table>