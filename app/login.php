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


    <section id="login" class="flex flex--between">
        <span class="col col--12 page_title">
          Login
        </span>
        <div class="col col--12 col__md--5">
          <h3>Log in to Your Account</h3>
          <form class="flex">
            <fieldset class="col--12">
              <input type="text" id="username" name="username" placeholder="Username" autofocus required />
              <input type="password" id="password" name="password" placeholder="Password" />
            </fieldset>
            <fieldset class="button_container">
                <button type="submit">Log in</button>
            </fieldset>
          </form>
        </div>

        <div class="col col--12 col__md--2">
          <div class="flex flex--center or">
            <span >&mdash; OR &mdash;</span>
          </div>
        </div>

        <div class="col col--12 col__md--5">
          <h3>Checkout as Guest</h3>
          <form class="flex flex--between">
            <fieldset class="col--12">
              <div class="flex">
              <input class="half" type="text" id="first" name="FirstName" placeholder="First Name" required />
              <input class="half" type="text" id="last" name="LastName" placeholder="Last Name" />
              <input calss="col--12" type="email" id="email" name="email" placeholder="Email" required />
            </div>
            </fieldset>
            <fieldset class="button_container">
                <button type="submit">Continue to Checkout</button>
            </fieldset>
          </form>
        </div>
    </section>

    <?php
    include 'inc/footer.php';
    ?>
