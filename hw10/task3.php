<html>
<head><style>
.cards{display:flex;flex-wrap:wrap;width:700px;margin-left:auto;margin-right:auto;}
.cards .card{width:250px;border:1px solid red;border-radius:5px;display:flex;margin:10px;}
.menu {display:block;width:700px;margin-left:auto;margin-right:auto;}
.card .title{font-size:20px;font-weight:bold;}
.card .price{color:green;}
.card .description{display:flex;flex-direction:column;}
.card .price{flex-grow:1;}
.card .year{font-weight:bold;font-size:18px;}
.card img{height:60px; width:100px;}
</style></head>
<body>

<div class="cards">
<?php
$cars = [
  ["maker"=>"Toyota","model"=>"Carina","year"=>2001,"price"=>20000,"image"=>"https://a.d-cd.net/cea52es-480.jpg"],["maker"=>"Toyota","model"=>"Camry","year"=>2005,"price"=>30000,"image"=>"https://d1hu588lul0tna.cloudfront.net/toyotaone/ruru/002-camry-exclusive-next-steps_tcm-3020-870114.jpg"],
  ["maker"=>"Audi","model"=>"A6","year"=>2005,"price"=>30000,"image"=>"https://www.cstatic-images.com/car-pictures/xl/USC60AUC021B021001.png"],
  ["maker"=>"BMW","model"=>"X5","year"=>2007,"price"=>17000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
  ["maker"=>"Lada","model"=>"Granta","year"=>2017,"price"=>7000,"image"=>"http://www.kolesa.ru/uploads/2017/06/Lada-Granta-restyle-front1-1600x0-c-default.jpg"]
];
  $low = $_GET["low"];
  $high = $_GET["high"];
	foreach($cars as $element){
		if($element['price'] >= $low){
		if($element['price'] <= $high)
			print "<div class=\"card\">
						<img src=\"" . $element['image'] ."\"/>
						<div class=\"description\">
							<div class=\"title\">" .$element['maker']." ".$element['model']."</div>
							<div class=\"price\"> ".$element['price']."$</div>
							<div class=\"year\">".$element['year']."</div>
						</div>
					</div>";
		}
	}
?>
</div>
