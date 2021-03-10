<?php
include('demo.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xuat danh muc</title>
</head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="main.js"></script>
<script src="jquery-1.12.3.js"></script>
<link rel="stylesheet" type="text/css" href="frontend.css">
<body>
	<div class="title">
	     <h3>JQuery Accordion</h3>
    </div>

    <div class="content">
	<ul>
		<?php
		foreach ($list_cat as $item) {
			?>
				<li class="sub"><a href=""><?php echo $item['title'];?></a>
					<div class="button" onclick="myFunction()">
						<a class="nav" href="#" >+</a>

						
					</div>

				</li>
			<?php
		}
		?>
		<div class="side-categories" style="display:none" >
			Demo Frontend Javascript
		</div>
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
