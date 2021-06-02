<!DOCTYPE html>
<html lang="en">
<?php include("connection.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/templatemo-comparto.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Rent A Car</title>

</head>

<body>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-up fa-2x"></i></a>
    <div class="container-fluid">
        <div class="tm-site-header tm-mb-1">
            <div class="tm-site-name-container tm-bg-color-1">
                <h1 class="tm-text-white">Rent A Car</h1>
            </div>
            <div class="tm-nav-container tm-bg-color-8">
                <nav class="tm-nav" id="tm-nav">
                    <ul>
                        <li class="tm-nav-item ">
                            <a href="home.php" class="tm-nav-link">
                                <span class="tm-mb-1">.01</span>
                                <span>About</span>
                            </a>
                        </li>

                        <li class="tm-nav-item current">
                            <a href="#gallery" class="tm-nav-link">
                                <span class="tm-mb-1">.02</span>
                                <span>Rental Lists</span>
                            </a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="register.php" class="tm-nav-link">
                                <span class="tm-nav-text tm-mb-1">.03</span>
                                <span class="tm-nav-text">Registration</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="tm-mb-1" id="about">
          <div class="contact-form-outer" style="    width: 100%;">

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>

                    <th>
                       name
                    </th>
                    <th>
                      Civil ID
                    </th>
                    <th>
                      Car Type
                    </th>
                    <th>
                      Year
                    </th>
                    <th>
                      Rental Type
                    </th>
                    <th>
                      Number of Days, Months, or KM
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php

                  $stmt = $connection->prepare('SELECT * FROM registrations r join years y on y.id = r.year_id join customers c on c.id = r.customer_id');
                  $stmt->execute();
                  $results = $stmt->get_result();
                  while($row = $results->fetch_assoc()){

                  $name = $row['name'];
                  $civil_id = $row['civil_id'];
                    $car_type = $row['car_type'];
                      $year = $row['year'];
                        $rental_type_id = $row['rental_type_id'];
                          $price = $row['price'];
                   ?>
                    <tr>
                      <td>
                        <?php echo $name; ?>
                      </td>
                      <td>
                      <?php echo $civil_id; ?>
                      </td>
                      <td>
                      <?php echo $car_type ?>
                      </td>
                      <td>
                      <?php echo $year ?>
                      </td>
                      <td>
                      <?php if($rental_type_id == 1) {echo "Per KM";} if($rental_type_id == 2) {echo "Per Day";} if($rental_type_id == 3) {echo "Per Month";}  ?>
                      </td>
                      <td>
                      <?php echo $price ?>
                      </td>
                  </tr>
                <?php }  ?>
                </tbody>
                </table>
            </div>


          </div>
        </section>





        <footer class="text-center tm-mb-1">
            <p>Copyright &copy; 2021  </p>
        </footer>
    </div> <!-- .container -->
    <script src="js/jquery.min.js"></script> <!-- https://jquery.com/download/ -->
    <script src="js/imagesloaded.pkgd.min.js"></script> <!-- https://imagesloaded.desandro.com/ -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- https://isotope.metafizzy.co/ -->
    <script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->

</body>
</html>
