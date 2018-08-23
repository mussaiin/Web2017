<!DOCTYPE html>
<html>
<title>Cafe</title>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
<title>Sign up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#order" class="w3-bar-item w3-button">Order</a>
      <a href="#admin" class="w3-bar-item w3-button">Admin Page</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="1.jpg" alt="Hamburger Catering" width="100%" height="100%">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="3.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="900" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Cafe</h1><br>
      <h5 class="w3-center">Opened since 2018</h5>
      <p class="w3-large">The Catering Cafe was founded in 2018 by 4 SDU students. Our café helps students relax after a hard day's training, and teachers after a hard day's work. In our cafe you can relax under a calm song and have a tasty meal. Here you can not only eat deliciously or relax, but you can do calyshma and conduct business dinners.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.The door of our Catering Cafe are always open for you. </p>

    </div>
  </div>

  <hr>

  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <?php

      $host = 'localhost';
      $port = '5432';
      $database = 'dbms';
      $user = 'postgres';
      $password = '';

      $connectString = 'host=' . $host . ' port=' . $port . ' dbname=' . $database .
      	' user=' . $user . ' password=' . $password;


      $link = pg_connect ($connectString);
      if (!$link)
      {
      	die('Error: Could not connect: ' . pg_last_error());
      }


      $query = 'select p.product_name as "Meal", p.price as "Price", c.category_name as "Category" from products p inner join category c on c.category_id = p.category_id';

      $result = pg_query($query);

      $i = 0;
      echo '<html><body><table class = "w3-table w3-large"><tr class = "w3-tr w3-bold">';
      while ($i < pg_num_fields($result))
      {
      	$fieldName = pg_field_name($result, $i);
      	echo '<td class="w3-td">' . $fieldName . '</td>';
      	$i = $i + 1;
      }
      echo '</tr>';
      $i = 0;

      while ($row = pg_fetch_row($result))
      {
      	echo '<tr>';
      	$count = count($row);
      	$y = 0;
      	while ($y < $count)
      	{
      		$c_row = current($row);
      		echo '<td>' . $c_row . '</td>';
      		next($row);
      		$y = $y + 1;
      	}
      	echo '</tr>';
      	$i = $i + 1;
      }
      pg_free_result($result);

      echo '</table></body></html>';
      ?>

    </div>

    <div class="w3-col l6 w3-padding-large">
      <img src="2.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="order">
    <h1>Order</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, Almaty region, Kaskelen, Abylaikhan 1/2</b></p>
    <p>You can also contact us by phone 87022972008 or email catering_cafe@catering.com, or you can fill your order here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="FOOD NAME" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="QUANTITY" required name="Quantity"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="YOUR NAME" required name="CustomerName" value=""></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND ORDER</button></p>
    </form>
  </div>



        <div class="w3-container w3-padding-64" id="admin">

            <div class="row justify-content-center w3-white">
                <div class="col-md-11 col-lg-8 col-xl-7">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-company" role="tab" aria-controls="nav-profile" aria-selected="false">Administration</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade p-3" id="nav-company" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <form action="/api/company/sign_in.php" method="POST">
                                <div class="form-group row">
                                    <label for="username" class="col-md-3 col-form-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="username" class="form-control" id="Username" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <a href = "admin.php"><button type="submit" class="btn btn-primary btn-block">Sign in</button></a>


                                     </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">
                            <?php
                                echo htmlspecialchars($_GET['title']);
                            ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                            echo htmlspecialchars($_GET['content']);
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="/scripts/script.js"></script>



<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">

</footer>

</body>
</html>
