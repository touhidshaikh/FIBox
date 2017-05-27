<?php include "header.php"; ?>


<!--Main Container-->
<div class="container">
<div id="wrapper row">
	<!--Sidebar -->
	
	<?php include "sidebar.php";?>

	<!--Main Content-->
	<div id="main-wrapper">
		<div class="container-fluid">
				
				<div class="col-md-10">
					<?php
					if (isset($_REQUEST[ 'page' ])){

						$page = $_REQUEST[ 'page' ]; 

						$local_file =  "private/".$page.".php" ;
						
						echo "<br><br>";

					 	include $local_file;
					 }else{?>
					 <div class="jumbotron">
						<h2>Prepend File Inclusion Attack</h2>
						<p>Hello Guys. Touhid here.<br><b>Today i m very happy for you.</b> </p>
					</div>
					<?php };?>
				</div>
			
		</div>
	</div>
</div>
</div>
	
<?php include 'footer.php'; ?>
<!--JavaScript -->
<script></script>
</body>
</html>