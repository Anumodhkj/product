
<!DOCTYPE html>
 <html class="no-js"> 
	<!--Head-->    
        <?php
            require_once './head.php';
        ?>    
        <!--End of Head-->
	<body>

	<div id="fh5co-container">
            <div id="fh5co-home" class="js-fullheight" data-section="home">
                <div class="flexslider">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-text">
                        <div class="container">
                            <div class="row"> 
                                <h1 class="to-animate">Hotel</h1>
                                <h2 class="to-animate"><span>Welcome to our store</span></h2>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <input id="location" class="form-control" placeholder="Search Location" type="text"><br>
                                    <input class="btn btn-primary" value="SEARCH" type="submit">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                    <ul class="slides">
                        <li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
                        <li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
                        <li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
                    </ul>
                </div>
            </div>
		
            <div class="js-sticky">
                <div class="fh5co-main-nav">
                    <div class="container-fluid">
                        <div class="fh5co-menu-1">
                            <a href="#" data-nav-section="home">Home</a>
                            <a href="#" data-nav-section="reservation">Reservation</a>
                        </div>
                        <div class="fh5co-logo">
                            <a href="index.php">Hotel</a>
                        </div>
                        <div class="fh5co-menu-2">
                            <a href="#" data-nav-section="menu">Menu</a>
                            <a href="#" onclick="showCart()">Cart(3)</a>
                        </div>
                    </div>
                </div>
            </div>

		

            <div id="fh5co-menus" data-section="menu" style="padding-bottom: 10px">
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <h2 class="heading to-animate">Food Menu</h2>
                        <p class="sub-heading to-animate">
                            <span class="category">Category1</span> | 
                            <span class="category">Category2</span> | 
                            <span class="category">Category3</span> | 
                            <span class="category">Category4</span> | 
                            <span class="category">Category5</span> 
                        </p>
                    </div>
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
                                                <input class="btn btn-primary" value="Add to Cart" type="submit">
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
                                                <input class="btn btn-primary" value="Add to Cart" type="submit">
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
                                                <input class="btn btn-primary" value="Add to Cart" type="submit">
                                            </div>
                                        </div>
                                        <div class="fh5co-food-pricing">
                                            <h3>₹120</h3><br>
                                        </div>
                                    </li>
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
                                                <input class="btn btn-primary" value="Add to Cart" type="submit">
                                            </div>
                                        </div>
                                        <div class="fh5co-food-pricing">
                                            <h3>₹120</h3><br>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		
		
            <!--Reservation-->
            <div id="fh5co-contact" data-section="reservation">
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="heading to-animate">Reserve a Table</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 to-animate-2">
                            <h3>Contact Info</h3>
                            <ul class="fh5co-contact-info">
                                <li class="fh5co-contact-address ">
                                    <i class="icon-home"></i>
                                    Address
                                </li>
                                <li><i class="icon-phone"></i>Contact Number</li>
                                <li><i class="icon-envelope"></i>Email</li>
                            </ul>
                        </div>
                        <div class="col-md-6 to-animate-2">
                            <h3>Reservation Form</h3>
                            <div class="form-group ">
                                <label for="name" class="sr-only">Name</label>
                                <input id="name" class="form-control" placeholder="Name" type="text">
                            </div>
                            <div class="form-group ">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" class="form-control" placeholder="Email" type="email">
                            </div>
                            <div class="form-group">
                                <label for="occation" class="sr-only">Occation</label>
                                <select class="form-control" id="occation">
                                    <option>Select an Occation</option>
                                    <option>Wedding Ceremony</option>
                                    <option>Birthday</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="date" class="sr-only">Date</label>
                                <input id="date" class="form-control" placeholder="Date &amp; Time" type="text">
                            </div>
                            <div class="form-group ">
                                <label for="message" class="sr-only">Message</label>
                                <textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ">
                                <input class="btn btn-primary" value="Send Message" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Reservation-->
		
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
            .category:hover {
                color: #fb6e14
            }
            #location {
                border-color: white;
                color: white;
            }
            #location:hover {
                border-color: #fb6e14
            }
        </style>
        
        <script>
            function showCart() {
                window.location.href = "cart.php";
            }
        </script>
        
	</body>
</html>

