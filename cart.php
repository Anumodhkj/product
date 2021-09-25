
<!DOCTYPE html>
 <html class="no-js"> 
	<!--Head-->    
        <?php
            require_once './head.php';
        ?>    
        <!--End of Head-->
	<body>

	<div id="fh5co-container">
            <div class="js-sticky">
                <div class="fh5co-main-nav">
                    <div class="container-fluid">
                        <div class="fh5co-menu-1">
                            <a href="#" onclick="showHome()">Home</a>
                        </div>
                        <div class="fh5co-logo">
                            <a href="index.php">Hotel</a>
                        </div>
                        <div class="fh5co-menu-2">
                            <a href="#" onclick="showCart()">Cart(<span style="color: #fb6e14">3</span>)</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-featured" data-section="features">
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="heading to-animate">Food cart</h2>
                            <p class="sub-heading to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-menus" style="padding-bottom: 10px;">
                <div class="container">
                    <div class="row row-padded">
                        <div class="col-md-12">
                            <div class="fh5co-food-menu to-animate-2">
                                <ul>
                                    <li>
                                        <div class="fh5co-food-desc">
                                            <figure>
                                                <img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
                                            </figure>
                                            <div>
                                                <h3>Pineapple Juice</h3>
                                                <p>Far far away, behind the word mountains.
                                                Far far away, behind the word mountains.
                                                Far far away, behind the word mountains.</p><br>
                                                <input class="btn btn-primary minusBtn" value="-" type="submit">
                                                <span class="quantity">1</span>
                                                <input class="btn btn-primary plusBtn" style="margin-right: 20px" value="+" type="submit">
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fh5co-food-pricing">
                                            <h3>₹120</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="fh5co-food-desc">
                                            <figure>
                                                <img src="images/res_img_6.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
                                            </figure>
                                            <div>
                                                <h3>Pineapple Juice</h3>
                                                <p>Far far away, behind the word mountains.
                                                Far far away, behind the word mountains.
                                                Far far away, behind the word mountains.</p><br>
                                                <input class="btn btn-primary minusBtn" value="-" type="submit">
                                                <span class="quantity">1</span>
                                                <input class="btn btn-primary plusBtn" style="margin-right: 20px" value="+" type="submit">
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fh5co-food-pricing">
                                            <h3>₹120</h3><br>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="fh5co-food-desc">
                                            <figure>
                                                <img src="images/res_img_7.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
                                            </figure>
                                            <div>
                                                <h3>Pineapple Juice</h3>
                                                <p>Far far away, behind the word mountains.
                                                Far far away, behind the word mountains.
                                                Far far away, behind the word mountains.</p><br>
                                                <input class="btn btn-primary minusBtn" value="-" type="submit">
                                                <span class="quantity">1</span>
                                                <input class="btn btn-primary plusBtn" style="margin-right: 20px" value="+" type="submit">
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fh5co-food-pricing">
                                            <h3>₹120</h3><br>
                                        </div>
                                    </li>
                                    <li>
                                        <h3 style="float: left">Delivery Charge</h3>
                                        <h3 style="float: right">₹50</h3>
                                    </li>
                                    <li>
                                        <h3 style="float: left;color: #fb6e14">Total Amount</h3>
                                        <h3 style="float: right;color: #fb6e14">₹410</h3>
                                    </li>
                                </ul>
                                <input style="float: right" class="btn btn-primary" value="CHECKOUT" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
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

        <style>
            .plusBtn, .minusBtn, .quantity {
                padding: 6px;
                width: 35px
            }
        </style>
        
        <script>
            function showCart() {
                window.location.href = "cart.php";
            }
            
            function showHome() {
                window.location.href = "index.php";
            }
        </script>
        
	</body>
</html>

