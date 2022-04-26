<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        

        <title>Responsive landing page coffee 3D</title>
    </head>
    <body>
    <?php
       session_start();
    
    
       // initialize session variables
       $_SESSION['count'];
       
       
       // access session variables
    //    echo $_SESSION['count']; 
         ?>
        <script type="text/javascript">
           $(document).ready(function(){
               var count = <?php echo $_SESSION['count']?>;
               <?php $_SESSION['count']=0?>
               if (count != 0){
                $('#myModal').modal('show');
               }
               
           });
       </script>
      
        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <img src="assets/img/modal.png">
                        </div>
                    </div>
                    <div class="modal-body text-center">
                        <h4>Great!</h4>	
                        <p>Your booking has already been confirmed. <br>We will contact you if there is any changes occured. </p>
                        <button class="btn btn-success" data-dismiss="modal"><span>Okay</span></button>
                    </div>
                </div>
            </div>
        </div>     
        <!--===== HEADER =====-->
        <header class="l-header">
            <img src="assets/img/cafe.png" alt="tak">
        </header>

       <div class="tabs">
        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__img">
                        <img src="assets/img/waiter.png" alt="" data-speed="-2" class="move">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Cafe<br> Digi-X</h1>
                        <p class="home__description">Secure your table beforehand<br> by fillin up simple form.</p>
                        <a href="reserveform.php" class="home__button">Reserve Table</a>

                        <a href="bookinglist.php" class="admin__button">I am an Admin</a>
                    </div>
                </div>
                
            </section>
            <!-- <a href="reserveform.html" class="home__button">Reserve Table</a> -->
        </main>
       </div>
        

    </body>
</html>