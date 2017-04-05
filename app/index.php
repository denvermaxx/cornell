<?php
include 'inc/head.php';
include 'inc/nav.php';
?>

    <!-- Primary Page Layout -->
    <header class="flex flex--auto">
        <div class="col col--12 col__md--8">
            <div class="featured flex">
                <div class="feature-text">
                    <span>Lorem Ipsum</span>
                    <p>Lorem Ipsum dolor sit amet.</p>
                    <a href="" class="button">learn more</a>
                </div>
            </div>
        </div>
        <div class="col col--12 col__md--4">
            <div class="feature-side">
                <div class="image top hide_mobile"></div>
                <div class="text">
                    <span>Lorem Ipsum</span>
                    <p>Lorem Ipsum dolor sit amet</p>
                    <a href="" class="shopNow">shop now&nbsp;&nbsp;&rsaquo;</a>
                </div>
            </div>
            <div class="feature-side" style="margin-top:25px;">
                <div class="text">
                    <span>Lorem Ipsum</span>
                    <p>Lorem Ipsum dolor sit amet</p>
                    <a href="" class="shopNow">shop now&nbsp;&nbsp;&rsaquo;</a>
                </div>
                <div class="image bottom hide_mobile"></div>
            </div>
        </div>
    </header>

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

    <section id="newsletter" class="flex flex--center">
        <div class="col col--12">
            <h3>Sign Up For Our Newsletter</h3>
            <p>Join now for news, classes, and special offers</p>
            <form class="flex flex--center flex--top">
                <fieldset>
                    <input type="email" placeholder="email address">
                    <button type="submit">subscribe</button>
                </fieldset>
            </form>
        </div>
    </section>

    <?php
    include 'inc/footer.php';
    include 'inc/end.php';
    ?>
