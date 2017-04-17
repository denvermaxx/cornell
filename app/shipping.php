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
        <form id="shipping_info" class="flex flex--between flex--top">
            <h3 class="col col--12">Shipping Information</h3>
            <fieldset class="col col--12 col__md--6">
                <div class="flex flex--between">
                    <div class="col--12">
                        <div class="flex">
                            <input class="col--12" type="text" id="address1" name="address1" placeholder="Address Line 1" required />
                            <input class="col--12" type="text" id="address2" name="address2" placeholder="Address Line 2" />
                            <input class="col--12" type="text" id="phone" name="phone" placeholder="Phone Number" />

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
            <fieldset class="button_container col col--12">
                <button href="/payment.html" type="submit">Continue to Billing</button>
            </fieldset>
        </form>
    </section>

    <?php
    include 'inc/footer.php';
    ?>
