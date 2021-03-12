<?php
include('main.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ABC</title>
</head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="index.js"></script>
<script src="jquery-1.12.3.js"></script>
<link rel="stylesheet" type="text/css" href="main.css">
<body>
	<div class="title">
	     <h3>JQuery Accordion</h3>
    </div>
    <div class="content">
	<ul>
		<?php
		foreach ($result as $item) {
			?>
				<li class="sub"><a href=""><?php echo $item['title'];?></a>
					<div class="button">
						<a href="#" class="nav" >+</a>
					</div>
					<?php
						foreach ($sub_menu as $item) {
							?>
								<li class="sub_menu"><a href=""><?php echo $item['title'];?></a>
								<div class="button"></div>
						        </li>
				            <?php
				    	}
					?>
				</li>
			<?php
		}
		?>
	</ul>
		
    </div>
    <div class="slect">
		    	
		<a href="#" id="loadMore">Load More</a>
		<p class="totop">
		    <a href="#top">Back to top</a>
		</p>
    </div>
</body>
</html>