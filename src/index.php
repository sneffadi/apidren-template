<?php
require_once ("load.php"); ?>
<?php
get_header(); ?>


<div class="row">
    <div class="small-12 columns">
        <?php

// include 'templates/kitchen-sink.php';


?>
        <div class="row">
            <div class="large-6 hide-for-small columns">
                <img src="<?php get_image();?>/abidexin-banner.png">
            </div>
            <div class="large-6 small-12 columns banner">
                <h1>Lorem Ipsum <span>Lorem Ipsum</span> Lorem Ipsum!</h1>
                <h3>Lorem Ipsum Lorem Ipsum Lorem Ipsum</h3>
                <ul>
                    <li>Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>
                    <li>Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>
                    <li>Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>
                    <li>Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>
                </ul>
                <a href="#buy" class="button small radius hide-for-small go-to-buy-section">See Pricing</a>
                <div class="show-for-small-only">
                    <form action="<?php
echo $formURL ?>" method="get" id="banner-form">
                        <select>
                            <option value="<?php
echo $buy1 ?>">1 Bottle - $XX.xx</option>
                            <option value="<?php
echo $buy2 ?>">2 Bottles - $XX.xx</option>
                            <option value="<?php
echo $buy3 ?>">3 Bottles - $XX.xx</option>
                        </select>
                        <button class="addtoCart radius">
                            Buy Now
                        </button>
                </div>
                    </form>

            </div>
        </div>
        <div id="testimonials">
            <h2>Testimonials</h2>
            <div class="row testimonial">
                <div class="small-12 large-4 columns">
                    <img src="<?php
get_image(); ?>" class="test">
                </div>
                <div class="small-12 large-8 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    <p class="name">- John Doe</p>
                </div>
            </div>
            <div class="row testimonial">
                <div class="small-12 large-4 columns">
                    <img src="<?php
get_image(); ?>" class="test">
                </div>
                <div class="small-12 large-8 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    <p class="name">- John Doe</p>
                </div>
            </div>
            <div class="row testimonial">
                <div class="small-12 large-4 columns">
                    <img src="<?php
get_image(); ?>" class="test">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                <p class="name">- John Doe</p>
            </div>
            <div class="row testimonial">
                <div class="small-12 large-4 columns">
                    <img src="<?php
get_image(); ?>" class="test">
                </div>
                <div class="small-12 large-8 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    <p class="name">- John Doe</p>
                </div>
            </div>
        </div> <!-- /#testimonials  -->

        <div id="faq" class="expandable">
            <div class="row">
            <div class="small-12 medium-9 columns">
                <h2>Frequently Asked Questions</h2>
            </div> <!-- / .small-9 -->
            <div class="small-12 medium-3 columns">
                <div class="show-hide-all" data-text-swap="Hide All [-]" data-text-original="Show All [+]"></div>
            </div> <!-- / .small-12 -->
            </div> <!-- / .row -->
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <h5>Product Questions</h5>
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                </div> <!-- / .columns -->
                <div class="small-12 medium-6 columns">
                    <h5>Order Questions</h5>
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide" data-text-swap="[-]" data-text-original="[+]"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide" data-text-swap="[-]" data-text-original="[+]"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide" data-text-swap="[-]" data-text-original="[+]"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                            <span class="show-hide" data-text-swap="[-]" data-text-original="[+]"></span>
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                </div> <!-- / .columns -->
                <div class="small-12 columns">
                    <p class="contact">Still have questions?
                        <a href="http://product.dev/src/parts/contact.php" data-reveal-ajax="true" data-reveal-id="support" >Contact Our Support Team</a>
                    </p>
                    <div id="support" class="reveal-modal medium" data-reveal></div><!-- / #support keep empty -->
                </div> <!-- / .columns -->
            </div> <!-- / .row -->
        </div> <!-- /#faq  -->
        <div class="row">
            <div class="large-12 columns large-centered">
                <h2>Order <?php echo $productName ?> Today!</h2>
                <div id="buy">
                    <div class="small-12 large-4 columns buy buy1 radius">
                        <div class="row buy-head">
                            <div class="small-12 columns">
                            Get Started
                            </div>
                        </div>
                        <form action="<?php echo $formURL ?>" method="get">
                            <div class="row">
                                <div class="small-12 columns products">
                                    <img src="<?php get_image(); ?>/buy1.png">
                                </div>
                            </div>
                            <div class="row priceWrap">
                                <div class="small-6 columns">
                                Retail: $99.95
                                </div>
                                <div class="small-6 columns savings">
                                $50 Savings
                                </div>
                            </div> <!-- / .row -->
                            <div class="row price">
                                <div class="small-12 columns">
                                    <sup>$</sup>49<sup>95</sup>
                                </div>
                            </div>
                            <div class="row bottle">
                                <div class="small-12 columns">1 Bottle - 30 Day Supply</div>
                            </div>
                            <div class="row bonusWrap">
                                <div class="small-12 columns buy-bonus bonus1">
                                    $4.95 Flat-Rate Shipping
                                </div>
                            </div>
                            <div class="row">
                                <button class="addtoCart radius">
                                Buy Now
                                </button>
                            </div>
                            <input name="add" type="hidden" value="apidren1">
                        </form>
                    </div><!-- /.buy1 -->
                    <div class="small-12 large-4 columns buy buy2 radius">
                        <div class="row buy-head mostPopular">
                            <div class="small-12 columns">
                            Most Popular
                            </div>
                        </div>
                        <form action="<?php echo $formURL ?>" method="get">
                            <div class="row">
                                <div class="small-12 columns products">
                                    <img src="<?php get_image(); ?>/buy1.png">
                                </div>
                            </div>
                            <div class="row priceWrap">
                                <div class="small-6 columns">
                                Retail: $99.95
                                </div>
                                <div class="small-6 columns savings">
                                $50 Savings
                                </div>
                            </div> <!-- / .row -->
                            <div class="row price">
                                <div class="small-12 columns">
                                    <sup>$</sup>49<sup>95</sup>
                                </div>
                            </div>
                            <div class="row bottle">
                                <div class="small-12 columns">1 Bottle - 30 Day Supply</div>
                            </div>
                            <div class="row bonusWrap">
                                <div class="small-12 columns buy-bonus bonus1">
                                    $4.95 Flat-Rate Shipping
                                </div>
                            </div>
                            <div class="row">
                                <button class="addtoCart radius">
                                Buy Now
                                </button>
                            </div>
                            <input name="add" type="hidden" value="apidren1">
                        </form>
                    </div><!-- /.buy2 -->
                    <div class="small-12 large-4 columns buy buy3 radius">
                        <div class="row buy-head">
                            <div class="small-12 columns">
                            Best Value
                            </div>
                        </div>
                        <form action="<?php echo $formURL ?>" method="get">
                            <div class="row">
                                <div class="small-12 columns products">
                                    <img src="<?php get_image(); ?>/buy1.png">
                                </div>
                            </div>
                            <div class="row priceWrap">
                                <div class="small-6 columns">
                                Retail: $99.95
                                </div>
                                <div class="small-6 columns savings">
                                $50 Savings
                                </div>
                            </div> <!-- / .row -->
                            <div class="row price">
                                <div class="small-12 columns">
                                    <sup>$</sup>49<sup>95</sup>
                                </div>
                            </div>
                            <div class="row bottle">
                                <div class="small-12 columns">1 Bottle - 30 Day Supply</div>
                            </div>
                            <div class="row bonusWrap">
                                <div class="small-12 columns buy-bonus bonus1">
                                    $4.95 Flat-Rate Shipping
                                </div>
                            </div>
                            <div class="row">
                                <button class="addtoCart radius">
                                Buy Now
                                </button>
                            </div>
                            <input name="add" type="hidden" value="apidren1">
                        </form>
                    </div><!-- /.buy3 -->
                </div><!-- /.buytable -->
            </div> <!-- / .large-12 -->
        </div><!-- / .row.content -->
    </div> <!-- / .columns -->
</div> <!-- / .row -->
<?php
get_footer(); ?>
