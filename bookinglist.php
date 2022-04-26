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

                    <div class="bookinglist">
                    <?php
                    require_once ("assets/php/config.php");

                    $sql = "SELECT * FROM booking";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                        // $var=0;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) { ?>
                        
                            <div class="booking-card">
                        
                                <div class="left-side">
                                    
                                <img class="imgList" src="assets/img/cafe.png" alt="logo">
                                <div class="sizedBox1"></div>
            
                                <div class="textPart">
                                    <ul class="cardDesc">
                                        <li class="custName"><?php echo $row["name"] ?></li>
                                        <li class="bookDate"><?php echo $row["bookDate"] ?> <i>(<?php echo $row["bookTime"] ?>)</i></li>
                                        <li class="phone"><?php echo $row["phone"] ?> | <?php echo $row["email"] ?></li>
                                        
                                    </ul>
                                </div>
                                </div>    
                                <p class="pax"><?php echo $row['pax'] ?>&nbsp; pax</p>
                            </div>
                            
                        
                    <?php 
                            }
                        } 
                        else {
                            echo '<img src="assets/img/norecord.png" style="justify-content:center; width: 500px; margin-left: 20px">';
                            echo '<p style="justify-content:center; margin-left: 180px">No record found</p>';
                        }
                        mysqli_close($conn);
                    ?>
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