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
    <title>Rent A Car</title>

</head>

<body>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-up fa-2x"></i></a>
    <div class="container-fluid">
        <div class="tm-site-hecliader tm-mb-1">
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

                        <li class="tm-nav-item">
                            <a href="list.php" class="tm-nav-link">
                                <span class="tm-mb-1">.02</span>
                                <span>Rental Lists</span>
                            </a>
                        </li>
                        <li class="tm-nav-item current">
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
            <?php
            if(isset($_GET['success'])){
                $alert = "<div class='alert alert-success' role='alert'>Request created successfully</div>";
                  echo $alert;
              }
              if(isset($_GET['error'])){
                $alert = "<div class='alert alert-danger'  role='alert'>You have to fill all the required fields</div>";
              }

              ?>
              <form id="contact-form" action="reg_request.php" method="POST" class="tm-bg-color-6 tm-contact-form">
                  <h4>Customer Information</h4>
                  <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required />
                  </div>

                  <div class="form-group">
                      <input type="text" name="civilid" class="form-control" placeholder="Civil ID" required />
                  </div>

                  <div class="form-group">
                      <input type="text" name="phone" class="form-control" placeholder="Phone #" required />
                  </div>

                  <div class="form-group">
                    <select class="form-control" name="gender">
                      <option value="Male">Gender</option>
                        <option value="Male">Male</option>
                          <option value="Male">Female</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <input type="text" name="address" class="form-control" placeholder="address" required />
                  </div>

                  <div class="form-group">
                      <input type="text" name="city" class="form-control" placeholder="City" required />
                  </div>

                   <h4>Car Information</h4>
                   <div class="form-group">
                       <!-- <input type="text" name="cartype" class="form-control" placeholder="Car Type" required /> -->
                       <select class="form-control" name="cartype">
                         <option value="Car Type">Car Type</option>
                         <?php
                         $get_all = mysqli_query($connection, "SELECT * FROM car_types");
                         if($get_all){
                           while($row = mysqli_fetch_assoc($get_all)){
                             $id = $row['id'];
                             $name = $row['name'];
                             echo " <option value='$name'>$name</option>";
                           }}
                         ?>
                       </select>
                   </div>


                   <div class="form-group">
                     <select class="form-control" name="year">
                       <option value="Male">Year Of Production</option>
                       <?php
                       $get_all = mysqli_query($connection, "SELECT * FROM years");
                       if($get_all){
                         while($row = mysqli_fetch_assoc($get_all)){
                           $id = $row['id'];
                           $year = $row['year'];
                           echo " <option value='$id'>$year</option>";
                         }}
                       ?>
                     </select>
                   </div>

                   <div class="form-group">
                      <label>Rental Type</label>
                      <input type="radio" name="rentaltype" value="1" checked> Per KM
                        <input type="radio" name="rentaltype" value="2"> Per Day
                          <input type="radio" name="rentaltype" value="3"> Per Month
                   </div>

                   <div class="form-group">
                       <input type="number" name="unit" class="form-control" placeholder="Number of Days, Months, or KM" required />
                   </div>

                   <div class="form-group">
                       <label>Insurance Price (KD)</label>
                       <input type="number" readonly name="insurance" class="form-control" value="60" required />
                   </div>


                   <div class="form-group">

                      <input type="checkbox" name="cc" required> I accept the rules, regulations, and provisions of this form specifying that there will be no violation of any rules in this form. I acknowledge and agree to abide by and accept full responsibility for all regulations, legislation and rules of this form.

                   </div>

                  <div>
                      <button type="submit" class="ml-auto tm-btn tm-btn-3">
                          Submit Request
                      </button>
                  </div>
              </form>
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