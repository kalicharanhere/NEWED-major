<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion Template" />
    <meta name="keywords" content="Male_Fashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>NEWED-Checkout</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
  </head>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__text">
              <h4>Check Out</h4>
              <div class="breadcrumb__links">
                <a href="./index.html">Home</a>
                <a href="./shop.html">Shop</a>
                <span>Check Out</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
      <div class="container">
        <div class="checkout__form">
          <form action="#">
            <div class="row">
              <div class="col-lg-8 col-md-6">
                
                <h6 class="checkout__title">Billing Details</h6>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Fist Name<span>*</span></p>
                      <input type="text" name="name" id="name" value="<?php echo $_SESSION['name']; ?>" />
                    </div>
                  </div>
                  
                </div>
                <div class="checkout__input">
                  <p>Country<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="checkout__input">
                  <p>Address<span>*</span></p>
                  <input
                    type="text"
                    placeholder="Street Address"
                    class="checkout__input__add"
                  />
                  <input
                    type="text"
                    placeholder="Apartment, suite, unite ect (optinal)"
                  />
                </div>
                <div class="checkout__input">
                  <p>Town/City<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="checkout__input">
                  <p>State<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="checkout__input">
                  <p>Postcode / ZIP<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Phone<span>*</span></p>
                      <input type="text" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Email<span>*</span></p>
                      <input type="text" value="<?php echo $_SESSION['email']; ?>" />
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="checkout__order">
                  <h4 class="order__title">Your order</h4>
                  <div class="checkout__order__products">
                    Product <span>Total</span>
                  </div>
              <?php
    global $grandtotal;
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
        

        $sql="SELECT * FROM cart where cus_name='".$_SESSION['name']."'";

        //echo 'sql: ' . $sql;
        $result = mysqli_query($conn, $sql); 
        $result = $conn->query($sql); 


        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
        
            $name=$row["name"];
            $price=$row["price"];
            $file=$row['image'];
            $quantity=$row['quantity'];
            $id=$row['product_id'];
            $total1 = $quantity * $price;
            $grandtotal +=$total1;
            ?>
             
                  <ul class="checkout__total__products">
                    <li><?php echo ''.$name.''; ?><span>$<?php echo ''.$total1.''; ?></span></li>
                    
                  </ul>
                  
                  
                  
              <?php
      }
}  else{
  echo "No found";
}

          ?>
          <ul class="checkout__total__all">
                    
                    <li>Total <span>$<?php echo ''.$grandtotal.''; ?></span></li>
                    <input type="hidden" name="amt" id="amt" value="<?php echo ''.$grandtotal.''; ?>">
                  </ul>
          <button type="submit" id="rzp-button1" onclick="pay_now()" class="site-btn">PLACE ORDER</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__about">
              <div class="footer__logo">
                <p class="display-3">NEWED</p>
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
                Copyright ??
                <script>
                  document.write(new Date().getFullYear());
                </script>
                by NEWED

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
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
<script>
  function pay_now(){
    var name=jQuery('#name').val();
    var amt=jQuery('#amt').val();
    var options = {
        "key": "rzp_test_VJ93amdAxD3DNL",
        "amount": amt*100,
        "currency": "INR",
        "name": "NEWED",
        "description": "Test Transaction",
        "image": "https://example.com/your_logo",
        
        "handler": function(response) {
          jQuery.ajax({
            type:'POST',
            url:'payment_process.php',
            data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
            success:function(result){
              window.location.href="thank_you.php"
            }
          })
        },
        
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
  
  }
</script>
    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
