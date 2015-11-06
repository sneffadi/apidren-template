<div class="top-bar-container contain-to-grid">
<div class="row">
    <nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <li class="name">
                <h1>
                    <a href="#">
                        logo
                    </a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li><a href="tel:<?php global $phoneNumber; echo $phoneNumber;?>"><?php echo $phoneNumber;?></a></li>
                <li><a href="parts/contact.php" data-reveal-ajax="true" data-reveal-id="support" >Contact Us</a></li>
                <li class="has-form">
                    <a href="#buy" class="button radius secondary go-to-buy-section">See Pricing</a>
                    <a href="<?php echo $formURL ?>" class="cart">Cart</a>
                    <div class="order-summary">
                        <div>Your Cart</div>
                        <div>1 Item</div>
                        <div>$90.00</div>
                        <a class="button radius success" href="<?php echo $formURL ?>">Checkout</a>
                    </div>
                </li>
            </ul>
        </section>
    </nav>
    </div>
</div><!--/.top-bar-container-->
