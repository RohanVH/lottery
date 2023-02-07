<!-- /**
 * Author:    Rohan
 * Created:   21.10.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php require 'init.php'; ?>
<?php include 'head.php'; ?>	

<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src='tableeditor_dashboard.js' type='text/javascript'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src='tableeditor.js' type='text/javascript'></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<?php include 'dashboard_navbar.php'; ?>
	<h3>Random Numbers</h3>
	<div class="table-responsive">

		<tbody>
			<?php
			include("all_project.php");
			date_default_timezone_set('Asia/Kolkata');
			// 9pm - 9am
			if (date('ha') >= '09pm' && date('ha') <= '09am') {
				include_once("config.php");
				$result = mysqli_query($connectdb, "SELECT * FROM randdata");
				if (mysqli_num_rows($result) != 0) {
					$number = 1;
					$date = date("d/m/Y");
					while ($number < 49) {
						$x = 2; //pair of two digits
						$aa  = substr(str_shuffle("0123456789"), 0, $x);
						$bb = substr(str_shuffle("2345678910"), 0, $x);
						$cc = substr(str_shuffle("2341056789"), 0, $x);
						$v1 = strval($aa);
						$v2 = strval($bb);
						$v3 = strval($cc);

						$a = $v1[strlen($v1) - 2];
						$b = $v2[strlen($v2) - 2];
						$c = $v3[strlen($v3) - 2];

						$time = '';
						$status = '';
						$sql = "UPDATE `randdata` SET `AA` = '$aa', `BB` = '$bb', `CC` = '$cc', `a` = '$a', `b` = '$b', `c` = '$c', `date`='$date', `status`='' WHERE `id` = $number";
						$dataupdate = mysqli_query($connectdb, $sql);
						if ($dataupdate) {

							$number = $number + 1;
						}
					}
				}
			}
			?>
		</tbody>
		</table>
	</div>

	<?php include 'footer.php'; ?>