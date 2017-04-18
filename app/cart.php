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
          <span class="page_title col col--12">
            Shopping Cart
          </span>
            <form class="col woocommerce-cart-form" action="https://cornellstudio.dev/cart/" method="post">
                <table class="rwd-table cart_table shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0">
                                <tr bgcolor="#742b02" style="color:#fff; text-align:center;">
                                    <th class="table_product">Product</th>
                                    <th class="table_price">Price</th>
                                    <th class="table_qty">Quantity</th>
                                    <th class="product_price">Total</th>
                                    <th class="table_remove_product"><img src="img/remove.png"></th>
                                </tr>
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td data-th="Product:" class="table_product" data-title="Product">
                                        <a href="https://cornellstudio.dev/product/wc401-cone-10-b-mix/">
                                            <img src="img/product.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" height="75" height="75">
                                            <p>
                                                WC401 Cone 10 B Mix
                                            </p>
                                        </a>
                                    </td>
                                    <td data-th="Price:" class="table_price" data-title="Price">
                                        <span class="discount-info" title="<span class=&quot;woocommerce-Price-amount amount&quot;><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>2.00</span> bulk discount applied!">
                                        <span class="old-price" style="color: #777; text-decoration: line-through; margin-right: 4px;">
                                  <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span> 26.50
                                        </span>
                                        </span>
                                        <br />
                                        <span class="new-price">
                                  <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span> 24.50
                                        </span>
                                        </span>
                                        </span>
                                    </td>
                                    <td data-th="Quantity:" class="table_qty" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="number" class="input-text qty text" step="1" min="0" max="" name="cart[3c59dc048e8850243be8079a5c74d079][qty]" value="3" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                        </div>
                                    </td>

                                    <td data-th="Total:" class="table_price" data-title="Total">
                                        <span class="discount-info" title="Incl. $6 discount">
                                <span>
                                  <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span> 73.50
                                        </span>
                                        </span>
                                        <br />
                                        <span class="new-price"> (Incl. $6 discount)</span>
                                        </span>
                                    </td>

                                    <td data-th="Remove:" class="table_remove_product">
                                        <a href="https://cornellstudio.dev/cart/?remove_item=3c59dc048e8850243be8079a5c74d079&amp;_wpnonce=50beaa2583" class="remove" aria-label="Remove this item" data-product_id="21" data-product_sku="791-1">×</a>
                                    </td>
                                </tr>
                              </td>
                          </table>
                      </tr>
                    <!-- Coupon -->
                    <tr class="coupon_container">
                        <td class="actions flex">
                            <div class="coupon col--12">
                                <label for="coupon_code">Coupon Code:</label><br />
                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"><br />
                                <!-- <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button> -->
                                <a href="" class="link_button" name="apply_coupon" value="Apply coupon">
                                  Apply coupon <span>&rsaquo;</span>
                                </a>
                            </div>
                            <div class="updateCart col--12">
                              <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Update cart </button>
                              <input type="hidden" id="_wpnonce" name="_wpnonce" value="50beaa2583">
                              <input type="hidden" name="_wp_http_referer" value="/cart/?removed_item=1">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </section>

        <section id="cart_totals_container" class="flex flex--between cart-collaterals">
            <div class="cart_totals calculated_shipping col--12">
              <div class="flex">
                <span class="page_title col col--12">
                  Cart Total
                </span>
                <div class="shop_table shop_table_responsive col col--12">
                  <div class="flex flex--end">
                  <div class="col--12 col__md--4">
                    <div class="cart-subtotal">
                        <h4>Subtotal</h4>
                        <p data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>73.50</span>
                        </p>
                    </div>
                  </div>

                  <div class="col--12 col__md--4">
                    <div class="shipping">
                        <h4>Shipping</h4>
                        <p data-title="Shipping">
                            <ul id="shipping_method">
                                <li>
                                    <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup1" value="local_pickup:1" class="shipping_method" checked="checked">
                                    <label for="shipping_method_0_local_pickup1">Local pickup</label>
                                </li>
                                <li>
                                    <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_uspsflat_rate_box_priority" value="usps:flat_rate_box_priority" class="shipping_method">
                                    <label for="shipping_method_0_uspsflat_rate_box_priority">Priority Mail Flat Rate®: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19.35</span></label>
                                </li>
                                <li>
                                    <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_uspsflat_rate_box_express" value="usps:flat_rate_box_express" class="shipping_method">
                                    <label for="shipping_method_0_uspsflat_rate_box_express">Priority Mail Express Flat Rate®: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>71.25</span></label>
                                </li>
                            </ul>

                            <form class="woocommerce-shipping-calculator" action="https://cornellstudio.dev/cart/" method="post">
                                  <a href="#" class="shipping-calculator-button link_button">Calculate shipping <span>&rsaquo;</span></a>
                                <section class="shipping-calculator-form" style="display:none;">
                                    <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                        <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
                                				<option value="">Select a country…</option>
                                				<option value="US" selected="selected">United States (US)</option>
                                      </select>
                                    </p>
                                    <p class="form-row form-row-wide validate-required" id="calc_shipping_state_field">
                                        <span>
                            						<select name="calc_shipping_state" id="calc_shipping_state" placeholder="State / County">
                                          <option value="">Select an option…</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option>
                                          <option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option>
                                          <option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option>
                                          <option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option>
                                          <option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option>
                                          <option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option>
                                          <option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option>
                                          <option value="WY">Wyoming</option><option value="AA">Armed Forces (AA)</option><option value="AE">Armed Forces (AE)</option><option value="AP">Armed Forces (AP)</option>
                                        </select>
		                                  </span>
                                    </p>

                                    <p class="form-row form-row-wide validate-required" id="calc_shipping_postcode_field">
                                        <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode">
                                    </p>

                                    <p>
                                        <button type="submit" name="calc_shipping" value="1" class="button">Update totals</button>
                                    </p>
                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="50beaa2583"><input type="hidden" name="_wp_http_referer" value="/cart/?removed_item=1">
                                </section>
                            </form>
                        </p>
                    </div>
                  </div>

                  <div class="total_container col--12 col__md--4">
                    <div class="tax-total">
                        <h4>Tax</h4>
                        <p data-title="Tax"><span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">$</span>4.23</span>
                        </p>
                    </div>

                    <div class="order-total">
                        <h4>Total</h4>
                        <p data-title="Total"><strong><span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">$</span>77.73</span></strong>
                        </p>
                    </div>
                  </div>

                <div class="wc-proceed-to-checkout">
                    <button href="https://cornellstudio.dev/checkout/" class="checkout-button button alt wc-forward">
                    	Proceed to checkout <span>&rsaquo;</span>
                    </button>
                </div>
              </div>

            </div>
          </div>
        </section>

        <?php
    include 'inc/footer.php';
    ?>
