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

    <?php
    include 'inc/products_widget.php';
    include 'inc/classes_widget.php';
    include 'inc/newsletter_widget.php';
    ?>

    <?php
    include 'inc/footer.php';
    include 'inc/end.php';
    ?>
