<?php
include 'inc/head.php';
include 'inc/nav.php';
include 'inc/product_head.php';
?>

    <section id="content" class="product_page flex">
        <h2 class="col col--3">Categories</h2>

        <!-- IDEALLY PAGINATION GOES BELOW SIDE NAV BAR? -->
        <div class="col col--12 col__md--9">
            <div class="pagination flex flex--top flex--between">
              <a href="" class="previous">&lsaquo;</a>
              <a href="" class="active">1</a>
              <a href="">2</a>
              <a href="">3</a>
              <a href="">4</a>
              <a href="" class="next">&rsaquo;</a>
            </div>
        </div>
        <?php include 'inc/side_navigation.php' ?>

        <div id="product_container" class="col col--9">
          <div id="products" class="flex flex--between">
              <div class="col col--12 col__md--6 col__lg--4">
                  <div class="item">
                    <a href="">
                      <img src="img/product.png">
                      <span class="product_name">Product Name</span>
                      <span class="price">$5.99</span>
                    </a>
                  </div>
              </div>
              <div class="col col--12 col__md--6 col__lg--4">
                  <div class="item">
                    <a href="">
                      <img src="img/product.png">
                      <span class="product_name">Product Name</span>
                      <span class="price">$5.99</span>
                    </a>
                  </div>
              </div>
              <div class="col col--12 col__md--6 col__lg--4">
                  <div class="item">
                    <a href="">
                      <img src="img/product.png">
                      <span class="product_name">Product Name</span>
                      <span class="price">$5.99</span>
                    </a>
                  </div>
              </div>
          </div>
        </div>
    </section>


    <section id="pre-footer">
        <div class="flex flex--middle">
            <div class="col col--12 col__md--3">
                <a href=""><img src="img/logo-white.png"></a>
            </div>
            <div class="col col--12 col__md--9">
                <div class="social flex flex--end flex--middle">
                    <a href=""><img src="img/facebook.png" height="22"></a>
                    <a href=""><img src="img/instagram.png" height="22"></a>
                    <a href=""><img src="img/email.png" height="22"></a>
                    <a href="http://daytonoriginals.org/"><img src="img/daytonPatented.png" height="60"></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="flex flex--between flex--top">
        <div class="col col--12 col__md--4">
            <h4>Sign Up For Our Newsletter</h4>
            <input type="email" placeholder="email address"><button type="submit">subscribe</button>
        </div>
        <div class="col col--12 col__md--4">
            <h4>Contact</h4>
            <p>
                8290 N Dixie Drive <br /> Dayton, Ohio 45414 <br />
                <a href="tel:937-454-0357">(937) 454-0357</a> <br />
                <a href="mailto:cornellstudiosupply@gmail.com">cornellstudiosupply@gmail.com</a>
            </p>
        </div>
        <div class="col col--12 col__md--4">
            <h4>Hours</h4>
            <p>
                Tue, Thus, Fri 9:00 am — 4:30 pm <br /> Wed 9:00 am — 7:00 pm <br /> Sat 9:00 am — 2:00 pm <br /> Closed Sun &amp; Mon
            </p>
        </div>


    </footer>

    <!-- End Document -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/site.js"></script>
</body>

</html>
