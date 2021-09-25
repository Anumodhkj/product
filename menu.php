
<!DOCTYPE html>
<html class="no-js">
    <body>

        <!--Head-->    
        <?php
            require_once './head.php';
        ?>    
        <!--End of Head-->

    <!--<div id="fh5co-container">-->
        
        <!--Header-->
        <div class="js-sticky">
            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">
<!--                        <a href="#" data-nav-section="home">Home</a>
                        <a href="#" data-nav-section="about">About</a>
                        <a href="#" data-nav-section="features">Features</a>-->
                    </div>
                    <div class="fh5co-logo">
                        <a href="#" onclick="reload()">hotel</a>
                    </div>
                    <div class="fh5co-menu-2">
<!--                        <a href="#" data-nav-section="reservation">Reservation</a>
                        <a href="#" data-nav-section="form">Login or Sign Up</a>-->
                    </div>
                </div>
            </div>
        </div>
        <!--End of Header-->
        
        
    <div id="fh5co-container">   
        <div class="container" style="height: 1000px">

        </div>

    </div>

        
        <!--Footer-->    
        <?php
            require_once './footer.php';
        ?>
        <!--End of Footer-->



        <!--Script-->    
        <?php
            require_once './script.php';
        ?>
        <!--End of Script-->

        <script>
            function reload() {
                window.location.href = "index.php";
            }
        </script>
        
    </body>
</html>

