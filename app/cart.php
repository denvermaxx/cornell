<?php
include 'inc/head.php';
// include 'inc/nav.php';
?>


<body>
    <nav class="flex flex--auto">
        <div class="col col--12 col__lg--3">
            <a href="">
                <img src="img/logo.png" alt="Meares Law">
            </a>
        </div>
        <div class="col col--12 col__lg--9">
            <!-- Disable navigation on checkout pages?? -->
        </div>
    </nav>


    <section id="cart" class="flex flex--between">
        <div class="col col--12">
          <span class="page_title">
            Shopping Cart
          </span>
          <form>
            <fieldset>
              <table class="cart_table" cellpadding="0">
                  <tr bgcolor="#742b02" style="color:#fff; text-align:center;">
                    <th class="table_product">Product</th>
                    <th class="table_qty">QTY</th>
                    <th class="table_price">Price</th>
                  </tr>
                  <tr>
                    <td class="table_product">
                      <img src="img/product.png">
                      <p>C899 Cone 10 Woodfire B Mix</p>
                    </td>
                    <td class="table_qty">
                      <select name="cart_quantity">
                        <option>0 </option>
                        <option selected>1</option>
                        <option>2</option>
                      </select>
                    </td>
                    <td class="table_price">$26.50</td>
                  </tr>

                  <tr>
                    <td class="table_product">
                      <img src="img/product.png">
                      <p>C899 Cone 10 Woodfire B Mix</p>
                    </td>
                    <td class="table_qty">
                      <select name="cart_quantity">
                        <option>0 </option>
                        <option selected>1</option>
                        <option>2</option>
                      </select>
                    </td>
                    <td class="table_price">$26.50</td>
                  </tr>
              </table>
              </fieldset>
              <fieldset class="button_container flex">
                  <button type="submit">Continue to Checkout</button>
              </fieldset>
          </form>
        </div>
    </section>

    <?php
    include 'inc/footer.php';
    ?>
