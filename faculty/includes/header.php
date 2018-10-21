<nav class="navbar navbar-inverse navbar-fixed-top navpad1">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="home.php" class="navbar-brand" style="font-style: italic;">S-Mart</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="home.php">Home</a></li>
				<?php
					$cat_sql="SELECT * FROM item_cat";
					$cat_run=mysqli_query($conn,$cat_sql);
					while ($rows=mysqli_fetch_assoc($cat_run)) {
						$cat_name=ucwords($rows['cat_name']);
						if($rows['cat_slug']=="")
						{
							$cat_slug=$rows['cat_name'];
						}
						else
						{
							$cat_slug=$rows['cat_slug'];
						}
						echo "<li><a href='category1.php?category=$rows[cat_id]&category_name=$cat_slug'>$cat_name</a></li>";
					}
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="buy.php"><span class="glyphicon glyphicon-shopping-cart xyz"></span>&nbsp;Cart</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-user xyz"></span>&nbsp;<?php echo $session_username; ?></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout&nbsp;&nbsp;</a></li>
			</ul>
		</div>
	</nav>