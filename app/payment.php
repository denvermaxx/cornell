<?php
include 'inc/head.php';
// include 'inc/nav.php';
?>

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


    <section id="checkout" class="flex flex--between">
        <span class="col col--12 page_title">
          Checkout
        </span>

        <form id="billing_info" class="flex flex--between">
            <h3 class="col col--12">Billing Information</h3>
            <fieldset class="col col--12 col__md--6">
                <div class="flex flex--between">
                    <div class="col--12">
                        <div class="flex">
                            <input class="col--12" type="text" id="address1" name="address1" placeholder="Address Line 1" required />
                            <input class="col--12" type="text" id="address2" name="address2" placeholder="Address Line 2" />
                        </div>
                    </div>
                    <div class="col--12 sameAsShipping">
                        <div class="flex">
                            <input class="col--12" type="checkbox" id="sameAs" name="sameAs" />
                            <label for="sameAs">Same as Shipping</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="col--12 col__md--6">
                <div class="flex flex--between">
                    <div class="col--12">
                        <div class="flex">
                            <input class="col--12" type="text" id="city" name="city" placeholder="City" required/>
                            <input class="third" type="text" id="state" name="state" placeholder="State" required/>
                            <input class="third" type="text" id="zip" name="zip" placeholder="Zip Code" required/>
                            <input class="third" type="text" id="country" name="country" placeholder="Country" required/>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>

        <form id="payment_info" class="flex flex--between">
            <h3 class="col col--12">Payment Method</h3>
            <fieldset id="payment_type" class="col col--12 col__md--6">
                <div class="flex flex--between">
                    <h4 class="col--12">Select Type of Payment:</h4>

                    <input type="radio" name="credit_card" value="visa" id="visa">
                    <label for="visa"><img src="img/credit_cards/visa.png"></label>

                    <input type="radio" name="credit_card" value="amex" id="amex">
                    <label for="amex"><img src="img/credit_cards/amex.png"></label>

                    <input type="radio" name="credit_card" value="discover" id="discover">
                    <label for="discover"><img src="img/credit_cards/discover.png"></label>

                    <input type="radio" name="credit_card" value="mastercard" id="mastercard">
                    <label for="mastercard"><img src="img/credit_cards/mastercard.png"></label>

                    <input type="radio" name="credit_card" value="paypal" id="paypal">
                    <label for="paypal"><img src="img/credit_cards/paypal.png"></label>
                </div>
              </fieldset>
              <fieldset class="col--12">
                <div class="flex flex--between">
                    <div class="col col--12 col__md--6">
                        <div class="flex">
                            <input class="col--12" type="text" id="cardName" name="cardName" placeholder="Name on Card" required />
                            <input class="col--12" type="text" id="cardNum" name="CardNumber" placeholder="Card Number" />
                        </div>
                    </div>
                    <div class="col--12 col__md--6">
                        <div class="flex">
                            <input class="third" type="text" id="CVV" name="CVV" placeholder="CVV" />
                            <input class="third" type="text" id="expMonth" name="expMonth" placeholder="mm" />
                            <span class="slash">/</span>
                            <input class="third" type="text" id="expYear" name="expYear" placeholder="yy" />
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="button_container col col--12">
                <button type="submit">Complete Purchase</button>
            </fieldset>
        </form>
    </section>

    <?php
    include 'inc/footer.php';
    ?>
