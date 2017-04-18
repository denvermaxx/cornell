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


    <div id="post-8" class="post-8 page type-page status-publish hentry flex">
      <span class="page_title col col--12">
      Checkout
      </span>
      <div class="entry-content">
            <div class="woocommerce">
                <section id="checkout" class="flex flex--between">
                        <div class="col col--12">
                          <div class="coupon_container">
                            <div class="woocommerce-info">
                              Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                            </div>
                            <form class="checkout_coupon" method="post">
                                <!-- <p class="form-row form-row-first">
                                  <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                </p>
                                <p class="form-row form-row-last">
                                  <input type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                </p>
                                <div class="clear"></div> -->

                                    <div class="flex">
                                        <div class="coupon col--12 col__md--6">
                                            <!-- <label for="coupon_code">Have a coupon code?</label><br /> -->
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"><br />
                                            <a href="" class="link_button" name="apply_coupon" value="Apply coupon">
                                              Apply coupon <span>&rsaquo;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <div class="col--12">
                      <form id="billing_info" name="checkout" method="post" class="flex flex--between checkout woocommerce-checkout" action="https://cornellstudio.dev/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                        <div class="col col--12 col__md--6" id="customer_details">
                            <div class="flex flex--between">
                                <h4 class="col--12">Billing Information</h4>
                                <div class="col--12 woocommerce-billing-fields">
                                    <div class="woocommerce-billing-fields__field-wrapper flex flex--between">
                                        <p class="half form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-sort="10">
                                          <!-- <label for="billing_first_name" class="">First name <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="First Name" value="" autocomplete="given-name" autofocus="autofocus">
                                        </p>
                                        <p class="half form-row form-row-last validate-required" id="billing_last_name_field" data-sort="20">
                                          <!-- <label for="billing_last_name" class="">Last name <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Last Name" value="" autocomplete="family-name">
                                        </p>
                                        <p class="col--12 form-row form-row-last validate-required validate-email" id="billing_email_field" data-sort="110">
                                          <!-- <label for="billing_email" class="">Email address <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="Email Address"
                                                value="brian@cratosdesign.com" autocomplete="email username">
                                        </p>



                                        <p class="col--12 form-row form-row-wide" id="billing_company_field" data-sort="30">
                                          <!-- <label for="billing_company" class="">Company name</label> -->
                                          <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="Company Name" value="" autocomplete="organization">
                                        </p>
                                        <!-- <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                            id="billing_country_field" data-sort="40">
                                            <label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                                            <strong>United States (US)</strong>
                                            <input type="hidden" name="billing_country" id="billing_country" value="US"
                                                autocomplete="country" placeholder="Country" class="country_to_state">
                                        </p> -->

                                        <p class="col--12 form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-sort="50">
                                          <!-- <label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Address Line 1"
                                                value="" autocomplete="address-line1">
                                        </p>

                                        <p class="col--12 form-row form-row-wide address-field" id="billing_address_2_field" data-sort="60">
                                          <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Address Line 2" value="" autocomplete="address-line2">
                                        </p>

                                        <p class="col--12 form-row form-row-wide address-field validate-required"
                                            id="billing_city_field" data-sort="70" data-o_class="form-row form-row-wide address-field validate-required">
                                            <!-- <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label> -->
                                            <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="City" value="" autocomplete="address-level2">
                                        </p>

                                        <p class="half form-row form-row-wide address-field validate-state woocommerce-validated validate-required" id="billing_state_field" data-sort="80" data-o_class="form-row form-row-wide address-field validate-required validate-state woocommerce-validated">
                                          <!-- <label for="billing_state" class="">State <abbr class="required" title="required">*</abbr></label> -->
                                          <select name="billing_state" id="billing_state" class="state_select select2-hidden-accessible" autocomplete="address-level1"
                                              data-placeholder="State" tabindex="-1" aria-hidden="true">
                                              <option value="">State</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AA">Armed Forces (AA)</option>
                                              <option value="AE">Armed Forces (AE)</option><option value="AP">Armed Forces (AP)</option>
                                          </select>

                                          <!-- What is this? lol -->
                                          <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                              <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_state-container">
                                                  <span class="select2-selection__rendered" id="select2-billing_state-container" title="Ohio">Ohio</span>
                                                  <span class="select2-selection__arrow" role="presentation">
                                                    <b role="presentation"></b>
                                                  </span>
                                                </span>
                                              </span>
                                              <span class="dropdown-wrapper" aria-hidden="true"></span>
                                          </span> -->
                                        </p>

                                        <p class="half form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-sort="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                          <!-- <label for="billing_postcode" class="">ZIP <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postal Code"
                                                value="" autocomplete="postal-code">
                                        </p>
                                        <p class="half form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-sort="100">
                                          <!-- <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Phone Number" value=""
                                                autocomplete="tel">
                                        </p>
                                    </div>
                                </div>
                            </div>
                          </div>

                            <!-- <div class="col-2">
                                <div class="woocommerce-shipping-fields">

                                    <h4 id="ship-to-different-address">
                                			<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                				<input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" name="ship_to_different_address" value="1"> <span>Ship to a different address?</span>
                                			</label>
                                		</h4>

                                    <div class="shipping_address" style="display: block;">
                                        <div class="woocommerce-shipping-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required" id="shipping_first_name_field" data-sort="10">
                                              <label for="shipping_first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                              <input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder=""
                                                    value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>

                                            <p class="form-row form-row-last validate-required" id="shipping_last_name_field" data-sort="20">
                                              <label for="shipping_last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                              <input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder=""
                                                    value="" autocomplete="family-name">
                                            </p>

                                            <p class="form-row form-row-wide" id="shipping_company_field" data-sort="30">
                                              <label for="shipping_company" class="">Company name</label>
                                              <input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" value="" autocomplete="organization">
                                            </p>
                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                id="shipping_country_field" data-sort="40">
                                                <label for="shipping_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                                                <strong>United States (US)</strong>
                                                <input type="hidden" name="shipping_country" id="shipping_country" value="US"
                                                    autocomplete="country" class="country_to_state">
                                            </p>

                                            <p class="form-row form-row-wide address-field validate-required" id="shipping_address_1_field" data-sort="50">
                                              <label for="shipping_address_1" class="">Address <abbr class="required" title="required">*</abbr></label>
                                              <input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Street address"
                                                    value="" autocomplete="address-line1">
                                            </p>

                                            <p class="form-row form-row-wide address-field" id="shipping_address_2_field" data-sort="60">
                                              <input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2">
                                            </p>

                                            <p class="form-row form-row-wide address-field validate-required"
                                                id="shipping_city_field" data-sort="70" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label for="shipping_city" class="">Town / City <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="" value=""
                                                    autocomplete="address-level2">
                                            </p>

                                            <p class="form-row form-row-wide address-field validate-state woocommerce-validated validate-required" id="shipping_state_field" data-sort="80" data-o_class="form-row form-row-wide address-field validate-required validate-state woocommerce-validated">
                                              <label for="shipping_state" class="">State <abbr class="required" title="required">*</abbr></label>
                                              <select name="shipping_state" id="shipping_state" class="state_select  select2-hidden-accessible" autocomplete="address-level1"
                                                    data-placeholder="" tabindex="-1" aria-hidden="true"><option value="">Select an option…</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AA">Armed Forces (AA)</option><option value="AE">Armed Forces (AE)</option>
                                                    <option value="AP">Armed Forces (AP)</option>
                                                </select>

                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                                    <span class="selection">
                                                      <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-shipping_state-container">
                                                        <span class="select2-selection__rendered" id="select2-shipping_state-container" title="Ohio">Ohio</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                      </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </p>

                                            <p class="form-row form-row-wide address-field validate-postcode validate-required" id="shipping_postcode_field" data-sort="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                              <label for="shipping_postcode" class="">ZIP <abbr class="required" title="required">*</abbr></label>
                                              <input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="" value=""
                                                    autocomplete="postal-code">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="woocommerce-additional-fields">
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                        <p class="form-row notes" id="order_comments_field" data-sort="">
                                          <label for="order_comments" class="">Order notes</label>
                                          <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                          <div class="col col--12 col__md--6">
                            <div class="flex flex--between">
                                <h4 class="col--12">Shipping Information</h4>
                                <div class="col--12 woocommerce-shipping-fields">
                                    <div class="woocommerce-shipping-fields__field-wrapper flex flex--between">
                                        <p class="half form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="shipping_first_name_field" data-sort="10">
                                          <!-- <label for="shipping_first_name" class="">First name <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="First Name" value="" autocomplete="given-name" autofocus="autofocus">
                                        </p>
                                        <p class="half form-row form-row-last validate-required" id="shipping_last_name_field" data-sort="20">
                                          <!-- <label for="shipping_last_name" class="">Last name <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="Last Name" value="" autocomplete="family-name">
                                        </p>
                                        <p class="col--12 form-row form-row-last validate-required validate-email" id="shipping_email_field" data-sort="110">
                                          <!-- <label for="shipping_email" class="">Email address <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="email" class="input-text " name="shipping_email" id="shipping_email" placeholder="Email Address"
                                                value="brian@cratosdesign.com" autocomplete="email username">
                                        </p>



                                        <p class="col--12 form-row form-row-wide" id="shipping_company_field" data-sort="30">
                                          <!-- <label for="shipping_company" class="">Company name</label> -->
                                          <input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="Company Name" value="" autocomplete="organization">
                                        </p>
                                        <!-- <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                            id="shipping_country_field" data-sort="40">
                                            <label for="shipping_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                                            <strong>United States (US)</strong>
                                            <input type="hidden" name="shipping_country" id="shipping_country" value="US"
                                                autocomplete="country" placeholder="Country" class="country_to_state">
                                        </p> -->

                                        <p class="col--12 form-row form-row-wide address-field validate-required" id="shipping_address_1_field" data-sort="50">
                                          <!-- <label for="shipping_address_1" class="">Address <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Address Line 1"
                                                value="" autocomplete="address-line1">
                                        </p>

                                        <p class="col--12 form-row form-row-wide address-field" id="shipping_address_2_field" data-sort="60">
                                          <input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Address Line 2" value="" autocomplete="address-line2">
                                        </p>

                                        <p class="col--12 form-row form-row-wide address-field validate-required"
                                            id="shipping_city_field" data-sort="70" data-o_class="form-row form-row-wide address-field validate-required">
                                            <!-- <label for="shipping_city" class="">Town / City <abbr class="required" title="required">*</abbr></label> -->
                                            <input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="City" value="" autocomplete="address-level2">
                                        </p>

                                        <p class="half form-row form-row-wide address-field validate-state woocommerce-validated validate-required" id="shipping_state_field" data-sort="80" data-o_class="form-row form-row-wide address-field validate-required validate-state woocommerce-validated">
                                          <!-- <label for="shipping_state" class="">State <abbr class="required" title="required">*</abbr></label> -->
                                          <select name="shipping_state" id="shipping_state" class="state_select select2-hidden-accessible" autocomplete="address-level1"
                                              data-placeholder="State" tabindex="-1" aria-hidden="true">
                                              <option value="">State</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AA">Armed Forces (AA)</option>
                                              <option value="AE">Armed Forces (AE)</option><option value="AP">Armed Forces (AP)</option>
                                          </select>

                                          <!-- What is this? lol -->
                                          <!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                              <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-shipping_state-container">
                                                  <span class="select2-selection__rendered" id="select2-shipping_state-container" title="Ohio">Ohio</span>
                                                  <span class="select2-selection__arrow" role="presentation">
                                                    <b role="presentation"></b>
                                                  </span>
                                                </span>
                                              </span>
                                              <span class="dropdown-wrapper" aria-hidden="true"></span>
                                          </span> -->
                                        </p>

                                        <p class="half form-row form-row-wide address-field validate-postcode validate-required" id="shipping_postcode_field" data-sort="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                          <!-- <label for="shipping_postcode" class="">ZIP <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="Postal Code"
                                                value="" autocomplete="postal-code">
                                        </p>
                                        <p class="half form-row form-row-first validate-required validate-phone" id="shipping_phone_field" data-sort="100">
                                          <!-- <label for="shipping_phone" class="">Phone <abbr class="required" title="required">*</abbr></label> -->
                                          <input type="tel" class="input-text " name="shipping_phone" id="shipping_phone" placeholder="Phone Number" value=""
                                                autocomplete="tel">
                                        </p>

                                        <div class="col--12 woocommerce-additional-fields">
                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                <p class="form-row notes" id="order_comments_field" data-sort="">
                                                  <!-- <label for="order_comments" class="">Order notes</label> -->
                                                  <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col--12 col__md--6">
                            <div class="flex flex--between">
                                <h3 id="order_review_heading" class="col--12">Your order</h3>
                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            WC401 Cone 10 B Mix&nbsp; <strong class="product-quantity">× 3</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="discount-info" title="Incl. $6 discount">
                                              <span><span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>73.50</span>
                                              </span>
                                              <span class="new-price" style="color: #4AB915; font-weight: bold;"> (Incl. $6 discount)</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>73.50</span>
                                        </td>
                                    </tr>

                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td data-title="Shipping">
                                            <ul id="shipping_method">
                                                <li>
                                                    <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup1" value="local_pickup:1" class="shipping_method" checked="checked">
                                                    <label for="shipping_method_0_local_pickup1">Local pickup</label>
                                                  </li>
                                                <li>
                                                  <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_uspsflat_rate_box_priority" value="usps:flat_rate_box_priority" class="shipping_method">
                                                  <label for="shipping_method_0_uspsflat_rate_box_priority">Priority Mail Flat Rate®:
                                                    <span class="woocommerce-Price-amount amount">
                                                      <span class="woocommerce-Price-currencySymbol">$</span>
                                                      19.35
                                                    </span>
                                                  </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_uspsflat_rate_box_express" value="usps:flat_rate_box_express" class="shipping_method">
                                                    <label for="shipping_method_0_uspsflat_rate_box_express">Priority Mail Express Flat Rate®:
                                                      <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        71.25
                                                      </span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr class="tax-total">
                                        <th>Tax</th>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4.23</span>
                                        </td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                          <strong>
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>
                                              77.73
                                            </span>
                                          </strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div id="payment" class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">

                                        <label for="payment_method_cod">
                                      		Pay at Pickup
                                        </label>

                                        <div class="payment_box payment_method_cod">
                                            <p>Pay when you pick up your order at the store.</p>
                                        </div>
                                    </li>

                                    <li class="wc_payment_method payment_method_stripe">
                                        <input id="payment_method_stripe" type="radio" class="input-radio" name="payment_method" value="stripe" data-order_button_text="Continue to payment">

                                        <label for="payment_method_stripe">
                                      		Credit Card (Stripe)
                                          <img src="https://cornellstudio.dev/wp-content/plugins/woocommerce/assets/images/icons/credit-cards/visa.svg" alt="Visa" width="32" style="margin-left: 0.3em">
                                          <img src="https://cornellstudio.dev/wp-content/plugins/woocommerce/assets/images/icons/credit-cards/mastercard.svg" alt="Mastercard" width="32" style="margin-left: 0.3em">
                                          <img src="https://cornellstudio.dev/wp-content/plugins/woocommerce/assets/images/icons/credit-cards/amex.svg" alt="Amex" width="32" style="margin-left: 0.3em">
                                          <img src="https://cornellstudio.dev/wp-content/plugins/woocommerce/assets/images/icons/credit-cards/discover.svg" alt="Discover" width="32" style="margin-left: 0.3em">
                                          <img src="https://cornellstudio.dev/wp-content/plugins/woocommerce/assets/images/icons/credit-cards/jcb.svg" alt="JCB" width="32" style="margin-left: 0.3em">
                                          <img src="https://cornellstudio.dev/wp-content/plugins/woocommerce/assets/images/icons/credit-cards/diners.svg" alt="Diners" width="32" style="margin-left: 0.3em">
                                        </label>
                                        <div class="payment_box payment_method_stripe" style="display:none;">
                                            <div id="stripe-payment-data" data-panel-label="" data-description="" data-email="brian@cratosdesign.com" data-amount="7773" data-name="Cornell Studio Supply" data-currency="usd" data-image="" data-bitcoin="false" data-locale="en" data-allow-remember-me="false">
                                                <p>
                                                  Pay with your credit card via Stripe. TEST MODE ENABLED. In test mode, you can use the card number 4242424242424242 with any CVC and a valid expiration date or check the documentation "<a href="https://stripe.com/docs/testing">Testing Stripe</a>"
                                                    for more card numbers.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                  <noscript>
                              			Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.			&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;
                              		</noscript>

                                  <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">

                                  <input type="hidden" id="_wpnonce" name="_wpnonce" value="07d3ee0020">
                                  <input type="hidden" name="_wp_http_referer" value="/checkout/?wc-ajax=update_order_review">
                              </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </section>
            </div>
        </div>
        <!-- .entry-content -->
    </div>

    <?php
    include 'inc/footer.php';
    ?>
