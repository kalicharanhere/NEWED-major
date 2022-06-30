
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion Template" />
    <meta name="keywords" content="Male_Fashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>
 
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="offcanvas__option">
        <div class="offcanvas__links">
          <a href="#">Sign in</a>
          <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
          <span>Usd <i class="arrow_carrot-down"></i></span>
          <ul>
            <li>USD</li>
            <li>EUR</li>
            <li>USD</li>
          </ul>
        </div>
      </div>
      <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"
          ><img src="img/icon/search.png" alt=""
        /></a>
        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
        <a href="#"><img src="img/icon/cart.png" alt="" /> <span>0</span></a>
        <div class="price">$0.00</div>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
      </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
     
     <div class="container">
       <div class="row">
         <div class="col-lg-3 col-md-3">
         <div class="header__logo">
                       <p class="display-3">NEWED</p>
                   </div>
         </div>
         <div class="col-lg-6 col-md-6">
           <nav class="header__menu mobile-menu">
             <ul>
               <li class="active"><a href="./index.php">Home</a></li>
               <li><a href="./shop.php">Shop</a></li>
               <li>
                 <a href="./aboutus.php">About Us</a>
               </li>
               <li><a href="./blog.php">Blog</a></li>
               <li><a href="./contact.php">Contacts</a></li>
             </ul>
           </nav>
         </div>
         <div class="col-lg-3 col-md-3 py-4">
         <div class="h3 px-1">
                               <a class="btn btn-link btn-lg" href="./loginui.php">Sign in</a>
                               <a class="btn btn-link btn-lg" href="./logout.php">Log out</a>
                           </div>
         </div>
       </div>
       <div class="canvas__open"><i class="fa fa-bars"></i></div>
     </div>
   </header>
    <!-- Header Section End -->
    
    <?php
    $id = $_GET['id'];
    $servername = "localhost";  
    $username = "root";
    $password = "";
    $dbname = "newed";

   $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //$sql = "SELECT * FROM student_basic_table AS a, image AS b WHERE a.Roll_No=b.rollno";
        //$sql = "SELECT * FROM image AS a ,student_basic_table AS b WHERE a.Roll_No=b.Roll_No ";

        $sql="SELECT * FROM products AS a , images AS b WHERE a.product_id=b.product_ID && a.product_id=$id;";

        //echo 'sql: ' . $sql;
        $result = mysqli_query($conn, $sql); 
        $result = $conn->query($sql); 


        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
            $name=$row["product_name"];
            $price=$row["product_price"];
            $file=$row['imagepath'];
            $id=$row['product_id']
            ?>

       <section class="shop-details">
       <form method="post" action="./addtocart.php">
      <div class="product__details__pic">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="product__details__breadcrumb">
                <a href="./index.html">Home</a>
                <a href="./shop.html">Shop</a>
                <span>Product Details</span>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-6">
            <img src="./product_images/<?php echo ''.$file.''; ?>" >

            </div>
            <div class="col-6">
           
            
              <div class="product__details__text">
                <h4><?php echo ''.$name.''; ?></h4>
                
                <h3>$<?php echo ''.$price.''; ?> </h3>
                
                <div class="product__details__option">
                  <div class="product__details__option__size">
                    <span>Size:</span>
                    <label for="xxl"
                      >xxl
                      <input type="radio" name="size" id="xxl" value="xxl" />
                    </label>
                    <label class="active" for="xl"
                      >xl
                      <input type="radio" name="size" id="xl"value="xl" />
                    </label>
                    <label for="l"
                      >l
                      <input type="radio" name="size" id="l"value="l" />
                    </label>
                    <label for="sm"
                      >s
                      <input type="radio" name="size" id="sm"value="sm" />
                    </label>
                  </div>
                  
                </div>
                <div class="product__details__cart__option">
                  <div class="quantity">
                    <div class="pro-qty">
                      <input type="text" value="1" name="quantity"/>
                    </div>
                  </div>
                  <input type="hidden" name="pro_name" value="<?php echo ''.$name.''; ?>">
                  <input type="hidden" name="pro_price" value="<?php echo ''.$price.''; ?>">
                  <input type="hidden" name="pro_file" value="<?php echo ''.$file.''; ?>">
                  <input type="hidden" name="id" value="<?php echo ''.$id.''; ?>">
                  <input type="submit" class="primary-btn text-white" name="addcart" value="Add to cart"></a>
                </div>

                
                <div class="product__details__last__option">
                  <h5><span>Guaranteed Safe Checkout</span></h5>
                  <img src="img/shop-details/details-payment.png" alt="" />
                  <ul>
                    <li><span>SKU:</span> 3812912</li>
                    <li><span>Categories:</span> Clothes</li>
                    <li><span>Tag:</span> Clothes, Skin, Body</li>
                  </ul>
                  

                </div>
              </div>
            </div>
          </div>
            </div>
           
           
          </div>
        </div>
      </div>
      
    </section>
     
            </form> 
        
      
        <?php
      }
}  else{
  echo "No found";
}

          ?>
    <!-- Shop Details Section Begin -->
   
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
   
    <!-- Related Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__about">
              <div class="footer__logo">
                <a href="#"><img src="img/footer-logo.png" alt="" /></a>
              </div>
              <p>
                The customer is at the heart of our unique business model, which
                includes design.
              </p>
              <a href="#"><img src="img/payment.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
            <div class="footer__widget">
              <h6>Shopping</h6>
              <ul>
                <li><a href="#">Clothing Store</a></li>
                <li><a href="#">Trending Shoes</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Sale</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="footer__widget">
              <h6>Shopping</h6>
              <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Payment Methods</a></li>
                <li><a href="#">Delivary</a></li>
                <li><a href="#">Return & Exchanges</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
            <div class="footer__widget">
              <h6>NewLetter</h6>
              <div class="footer__newslatter">
                <p>
                  Be the first to know about new arrivals, look books, sales &
                  promos!
                </p>
                <form action="#">
                  <input type="text" placeholder="Your email" />
                  <button type="submit">
                    <span class="icon_mail_alt"></span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="footer__copyright__text">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <p>
                Copyright ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                2020 All rights reserved | This template is made with
                <i class="fa fa-heart-o" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
              </p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
