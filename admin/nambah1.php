<?php
session_start();

require '../config/functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["nambah1"]) ) {
	if (nambah1($_POST) > 0 ) {
		echo "
			   <script>
			   	alert('Data berhasil ditambahkan');
			   	document.location.href = 'beranda.php';
			   </script>
			   ";
	} else {
		echo mysqli_error($conn);
	}
}

if (!isset($_SESSION['username'])) {
	echo "<script>alert('Anda Harus Login!');</script>";
	header("Location: index.php");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php include '../template/head_admin.php'; ?>

    <style>
    	form{
    		height: 100vh;
    	}
    </style>
</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<?php include '../template/navbar_admin.php'; ?>

		<div id="page-wrapper">

			<div class="container-fluid">

				
				<!-- page table -->
				<form method="post">
					<center><h2 style="color: blue;">Tambah Admin</h2></center><br>
                  <fieldset>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                       
                          <label>Username:</label>
                          <input class="form-control" name="username" type="text" value="">
                          <br>
                          <label>Password:</label>
                          <input class="form-control" name="password" type="password" value="">
                          <br>
                          <div class="btn-group">
                           <button type="submit" name="nambah1" class="btn btn-primary">Tambah</button>
                          </div>
                        </div>
                      </div>
                    

                    </fieldset>

                </form>
					
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="js/plugins/morris/raphael.min.js"></script>
		<script src="js/plugins/morris/morris.min.js"></script>
		<script src="js/plugins/morris/morris-data.js"></script>

		<!-- Flot Charts JavaScript -->
		<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
		<script src="js/plugins/flot/jquery.flot.js"></script>
		<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
		<script src="js/plugins/flot/jquery.flot.resize.js"></script>
		<script src="js/plugins/flot/jquery.flot.pie.js"></script>
		<script src="js/plugins/flot/flot-data.js"></script>

		<!-- Page-Level Plugin Scripts - Tables -->
		<script src="datatable/jquery.dataTables.min.js"></script>
		<script src="datatable/dataTable.bootstrap.min.js"></script>
		<!-- tooltip -->
		<script>
			$('.tooltip-demo').tooltip({
				selector: "[data-toggle=tooltip]",
				container: "body"
			})
		</script>

			<!-- generate datatable on our table -->
			<script>
				$(document).ready(function(){
		//inialize datatable
		$('#myTable').DataTable();

	    //hide alert
	    $(document).on('click', '.close', function(){
	    	$('.alert').hide();
	    })
	});
	</script>

	</body>

	</html>

