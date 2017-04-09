

-
<?php
include 'inc/head.php';
include 'inc/nav.php';
?>

    <!-- Primary Page Layout -->


<section id="product_details" class="flex flex--between">
    <div class="col col--12 col__md--4">
      <span class="product_title">
        WC899 Cone 10 Woodfire B Mix
      </span>
      <span class="product_price">
        $28.50
      </span>
      <span class="stock">
        In Stock
      </span>
      <p class="product_desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.
      </p>

      <form>
        <select name="shippingMethod">
          <option value="">Shipping Method</option>
          <option value="M">Pickup </option>
          <option value="F">Service Delivery&nbsp;&nbsp;&nbsp;+$2.00 </option>
          <option value="F">Tailgate Delivery&nbsp;&nbsp;&nbsp;+$1.00</option>
        </select>
      </form>

      <table class="shipping_price_qty" cellpadding="0">
        <tr bgcolor="#742b02" style="color:#fff; text-align:center;">
          <th class="table_price">Price</th>
          <th class="table_qty">QTY</th>
        </tr>
        <tr>
          <td class="table_price">$26.50</td>
          <td class="table_qty">1 Box / 50lbs</td>
        </tr>
        <tr>
          <td class="table_price">$25.50</td>
          <td class="table_qty">2+ Boxes / 100-450lbs</td>
        </tr>
        <tr>
          <td class="table_price">$25.50</td>
          <td class="table_qty">2+ Boxes / 100-450lbs</td>
        </tr>
      </table>

    </div>
    <div id="product_photos" class="col--12 col__md--8">
      <div class="product_slider">
        <img src="img/product_fpo.jpg">
      </div>
    </div>
</section>


    <section id="home_products" class="flex flex--between">
        <div class="col col--12">
            <h2>Lorem Ipsum Dolor</h2>
        </div>
        <div class="col col--12 col__md--6 col__lg--3">
            <div class="item">
                <a href="">
                    <img src="img/product.png">
                    <span class="product_name">Product Name</span>
                    <span class="price">$5.99</span>
                </a>
            </div>
        </div>
        <div class="col col--12 col__md--6 col__lg--3">
            <div class="item">
                <a href="">
                    <img src="img/product.png">
                    <span class="product_name">Product Name</span>
                    <span class="price">$5.99</span>
                </a>
            </div>
        </div>
        <div class="col col--12 col__md--6 col__lg--3">
            <div class="item">
                <a href="">
                    <img src="img/product.png">
                    <span class="product_name">Product Name</span>
                    <span class="price">$5.99</span>
                </a>
            </div>
        </div>
        <div class="col col--12 col__md--6 col__lg--3">
            <div class="item">
                <a href="">
                    <img src="img/product.png">
                    <span class="product_name">Product Name</span>
                    <span class="price">$5.99</span>
                </a>
            </div>
        </div>
    </section>

    <section id="home_classes" class="flex flex--auto">
        <div class="col col--12 col__md--4">
            <div class="feature-side red">
                <div class="text">
                    <span>Classes, Workshops, &amp; Demonstrations at Cornell Studio Supply</span>
                    <p>Brought to you by amazingly talented and awesomely fun instructors!</p>
                    <a href="" class="button">see class schedule</a>
                </div>
            </div>
        </div>
        <div class="col col--12 col__md--8 hide_mobile">
            <div class="featured"></div>
        </div>
    </section>

    <?php
    include 'inc/footer.php';
    include 'inc/end.php';
    ?>
