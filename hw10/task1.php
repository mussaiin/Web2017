<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.menu {
	  margin-bottom: 13px;
	}
	.menu a {
	  color: green;
	}
	.item {
		position: relative;
	  border: 1px solid red;
	  border-radius: 5px;
	  width: 430px;
	  margin-bottom: 10px;
	  padding: 8px;
	}
	.urgent {
	  background-color: rgb(255, 255, 0);
	}
	img, .main_body, .title{
	  display: inline-block;
	}
	.description, .attributes{
	  margin: 0 0 2px 0;
	}
	.title {
	  vertical-align: middle;
	  margin-bottom: 17px;
	}
	.price {
		position: absolute;
		right: 0;
		top: 0;
	  border-radius: 5px;
	  background-color: rgb(255, 221, 221);
	  color: blue;
	  font-size: 15px;
	  padding: 4px;
	}
	</style>
</head>
<body>
  <div class="main">
    <?php
    $model = $_GET["model"];
    $cost = $_GET["cost"];
    $type = $_GET["Type"];
    $year = $_GET["year"];
    $att = $_GET["att"];
    print "
		<div class=\"item\">
		  <div class=\"main_body\">
		    <div class=\"title\">
		      <a href=\"#\"><h4> ".$model."</h4></a>
		      <p class=\"price\">".$cost."$</p>
		    </div>
		    <div class=\"description\">".$year."</div>
		    <div class=\"attributes\">".$type."</div>
		";
    foreach ($att as $value) {
    	# code...
    	echo  $value;
			print",";
    }
		print "
			</div>
		</div>
		";
    ?>
  </div>
</body>
</html>
