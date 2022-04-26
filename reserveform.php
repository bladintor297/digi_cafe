<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/style.css">
        

        <title>Responsive landing page coffee 3D</title>
    </head>
    <body>
    <?php 
    session_start();
    
    // access session variables
    // echo $_SESSION['count']; 
    ?>
        <!--===== HEADER =====-->
        <header class="l-header">
            <img src="assets/img/cafe.png" alt="tak">
        </header>

       <div class="tabs">
        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Cafe<br> Digi-X</h1>
                        <p class="home__description">Secure your table beforehand<br> by fillin up simple form.</p>
                        <a href="index.php"><button class="back__button">Back</button></a>
                    </div>
                    <div class="home__img">
                        <form class="form" id="slide" method="POST" action="assets/php/insertBooking.php">
                            <div class="form-row">
                              <div class="form-group col-md-7">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                              </div>
                              <div class="form-group col-md-5">
                                <label for="PhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter your phone no." required>
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label for="date">Dining Date</label>
                                  <input type="date" class="form-control" name="date" id="date" min="1899-01-01" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="pax">Total person</label>
                                    <input type="number" class="form-control" name="pax" min='1' max='15' placeholder="Max: 15" required>
                                  </div>
                                <div class="form-group col-md-5">
                                  <label for="time">Dining Time</label>
                                  <select name="time" class="form-control">
                                    <option selected disabled>Choose...</option>
                                    <option value="05.00pm - 06.00pm">05.00pm - 06.00pm</option>
                                    <option value="06.00pm - 07.00pm">06.00pm - 07.00pm</option>
                                    <option value="07.00pm - 08.00pm">07.00pm - 08.00pm</option>
                                    <option value="08.00pm - 09.00pm">08.00pm - 09.00pm</option>
                                    <option value="09.00pm - 10.00pm">09.00pm - 10.00pm</option>
                                    <option value="10.00pm - 11.00pm">10.00pm - 11.00pm</option>
                                    <option value="11.00pm - 12.00am">11.00pm - 12.00am</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your working email address">
                              </div>
                            <button type="submit" class="submit__button">Submit</button>
                          </form>
                    </div>

                    
                </div>
            </section>
        </main>
       </div>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    <script>
        
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
        dd = '0' + dd;
        }

        if (mm < 10) {
        mm = '0' + mm;
        } 
            
        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("date").setAttribute("min", today);
    </script>
</html>