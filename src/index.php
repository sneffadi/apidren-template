<?php require_once ("load.php"); ?>
<?php get_header(); ?>

<div class="row">
    <div class="small-12 columns">
        <?php // include 'templates/kitchen-sink.php'; ?>
        <header>
            <div class="row" id="banner">
                <div class="medium-6 hide-for-small columns">
                    <img src="<?php get_image();?>/abidexin-banner.png">
                </div>
                <div class="small-12 medium-6 columns banner">
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
                                <option value="<?php echo $buy1 ?>">1 Bottle - $XX.xx</option>
                                <option value="<?php echo $buy2 ?>">2 Bottles - $XX.xx</option>
                                <option value="<?php echo $buy3 ?>">3 Bottles - $XX.xx</option>
                            </select>
                            <button class="addtoCart radius">
                                Buy Now
                            </button>
                    </div>
                        </form>

                </div>
            </div>
        </header>
        <div class="row" id="pitch">
            <div class="small-12 columns">
                <h2>Intro</h2>
                <div class="row">
                    <div class="small-12 medium-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    </div> <!-- / .columns -->
                    <div class="small-12 medium-4 columns">
                        <img src="<?php get_image();?>/feature.png">
                    </div> <!-- / .small-3 -->
                </div> <!-- / .row -->

            </div> <!-- / .small-12 -->
        </div> <!-- / .row -->
        <div class="row" id="ingredients">
            <div class="small-12 columns">
                <h2>Ingredients</h2>
                <div class="row">
                    <div class="small-3 columns">
                        <img src="<?php get_image();?>/ingredient.png">
                    </div> <!-- / .medium-3 -->
                    <div class="small-9 columns">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    </div> <!-- / .medium-9 -->
                </div> <!-- / .row -->
                <div class="row">
                    <div class="small-3 columns">
                        <img src="<?php get_image();?>/ingredient.png">
                    </div> <!-- / .medium-3 -->
                    <div class="small-9 columns">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    </div> <!-- / .medium-9 -->
                </div> <!-- / .row -->
                <div class="row">
                    <div class="small-3 columns">
                        <img src="<?php get_image();?>/ingredient.png">
                    </div> <!-- / .medium-3 -->
                    <div class="small-9 columns">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    </div> <!-- / .medium-9 -->
                </div> <!-- / .row -->

            </div> <!-- / .small-12 -->
        </div> <!-- / .row -->
        <div class="row" id="testimonials">
            <div class=" columns">
                <h2>Testimonials</h2>
                <div class="row testimonial">
                    <div class="small-3 large-4 columns">
                        <img src="<?php get_image(); ?>">
                    </div>
                    <div class="small-9 large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                        <p class="name">- John Doe</p>
                    </div>
                </div><!--/.row testimonial-->
                <div class="row testimonial">
                    <div class="small-3 large-4 columns">
                        <img src="<?php get_image(); ?>">
                    </div>
                    <div class="small-9 large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                        <p class="name">- John Doe</p>
                    </div>
                </div><!--/.row testimonial-->
                <div class="row testimonial">
                    <div class="small-3 large-4 columns">
                        <img src="<?php get_image(); ?>">
                    </div>
                    <div class="small-9 large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                        <p class="name">- John Doe</p>
                    </div>
                </div><!--/.row testimonial-->
                <div class="row testimonial">
                    <div class="small-3 large-4 columns">
                        <img src="<?php get_image(); ?>">
                    </div>
                    <div class="small-9 large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                        <p class="name">- John Doe</p>
                    </div>
                </div><!--/.row testimonial-->
                <div class="row testimonial">
                    <div class="small-3 large-4 columns">
                        <img src="<?php get_image(); ?>">
                    </div>
                    <div class="small-9 large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                        <p class="name">- John Doe</p>
                    </div>
                </div><!--/.row testimonial-->

        </div> <!-- /#testimonials  -->

        <div id="faq" class="row expandable">
            <div class="small-12 columns">
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
                    <div class="small-12 columns">
                        <p class="contact">Still have questions?
                            <a href="http://product.dev/src/parts/contact.php" data-reveal-ajax="true" data-reveal-id="support">Contact Our Support Team</a>
                        </p>
                        <div id="support" class="reveal-modal small" data-reveal></div><!-- / #support keep empty -->
                    </div> <!-- / .columns -->
                </div> <!-- / .row -->
            </div> <!-- / .small-12 -->
        </div> <!-- /#faq  -->

        <div class="row guarantee">
            <div class="small-12 columns">
                <h2>Your Order is Backed By Our 100% Money Back Guarantee!</h2>
                <p><?php echo $productName;?> is guaranteed to give you results or your money back. If you're unsatisfied - IN ANY WAY - simply  <a href="http://product.dev/src/parts/contact.php" data-reveal-ajax="true" data-reveal-id="support">contact customer support</a> for a full refund (less shipping). The guarantee is good for one used and all unused bottles. What are you waiting for? <a href="#" class="go-to-buy-section">Get started today!</a></p>
            </div> <!-- / .small-12 -->
        </div> <!-- / .row -->

        <div class="row" id="buy">
            <div class="small-12 columns">
                <h2>Order <?php echo $productName ?> Today!</h2>
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
            </div> <!-- / .small-12 -->
        </div> <!-- / .row -->
<?php get_footer(); ?>
