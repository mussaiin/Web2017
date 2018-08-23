<a href="t2.php?category=sport">Sport news</a> | <a href="t2.php?category=politics">Politic news</a><br/><br/>
<a href="t2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="t2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category;
$format;
/* Write your code here */
if( isset($_GET['category'])&&isset($_GET['format']))  {
	$category = $_GET['category'];
	if($category=="sport"){
		echo json_encode($news["sport"]);
	}
	else{
		echo json_encode($news["politics"]);
	}
}
elseif (isset($_GET['category'])) {
	$category = $_GET['category'];
	if($category=="sport"){
		# code...
		foreach ($news as $key => $value) {
			if ($key=="sport") {
				echo $value[0]."<hr>";
				echo $value[1]."<hr>";
				# code...
			}
		}
	}
	else{
		foreach ($news as $key => $value) {
			if ($key=="politics") {
				echo $value[0]."<hr>";
				echo $value[1]."<hr>";
				# code...
			}
		}
	}
}
