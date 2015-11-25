<?php require_once ("load.php"); ?>
<?php get_header(); ?>

        <?php // include 'templates/kitchen-sink.php'; ?>
        <div id="banner">
            <div class="row">

                <h1>Buy Apidren Direct &amp; Save!</h1>
                <img src="<?php get_image();?>/main-bottle.png">
                <a href="#buy" class="button small round hide-for-small success go-to-buy-section">See Pricing</a>

                <div class="small-12 medium-9 medium-centered columns">
                    <p>With no middle man, you can get Apidren <b>for as little as $36.65</b> a bottle. Plus you’ll get our famous 90 day money back guarantee.</p>
                    <p>And for a limited time, we’ll throw in <b>Apidren 72 Hour Cleanse FREE</b> when you order 2 or more bottles of Apidren</p>
                    <div class="show-for-small-only">
                        <form action="<?php echo $formURL ?>" method="get" id="banner-form">
                            <select>
                                <option value="<?php echo $buy1 ?>">1 Bottle - $XX.xx</option>
                                <option value="<?php echo $buy2 ?>">2 Bottles - $XX.xx</option>
                                <option value="<?php echo $buy3 ?>">3 Bottles - $XX.xx</option>
                            </select>
                            <button class="add-to-cart radius success">
                                Buy Now
                            </button>
                    </div>
                        </form>

                </div>
            </div>
        </div> <!-- /#banner  -->
        <hr>
    <div id="intro">
        <div class="row">
            <h2>The Benefits of Apidren</h2>
            <div class="small-12 medium-6 columns">
                <div class="jessica">
                    <div class="head-wrap">
                        <h3>Jessica Lost 40lbs!</h3>
                        <a href="#panel3" class="anchorLink">Learn How »</a>
                    </div>
                </div>
                <p>*Results in Testimonials are atypical and individual results may vary. All testimonials achieved results with a healthy diet and exercise.</p>
            </div>
            <div class="small-12 medium-6 columns">
                <ul>
                    <li><b>Reduces Unwanted Body Fat</b> <br>by boosting your metabolism</li>
                    <li><b>Curbs Hunger Cravings</b> to make <br>eating less easier</li>
                    <li><b>Increases Energy and Focus</b> <br>without the jitters</li>
                    <li>Each order is backed by our <b>90 <br>Day Money Back Guarantee</b></li>
                    <li><b>Free Shipping</b> (within US) when <br>you order 2 or more bottles</li>
                    <li><b>Proudly Made in the USA</b></li>
                </ul>
            </div>
        </div> <!-- / .row -->
    </div> <!-- /#pitch  -->
    <hr>
    <div class="row">
        <div class="small-12 columns">
            <ul class="tabs" data-tab data-options="deep_linking:true">
              <li class="tab-title active"><a href="#buy">Buy Now</a></li>
              <li class="tab-title"><a href="#panel2">Testimonials</a></li>
              <li class="tab-title"><a href="#ingredients">Ingredients</a></li>
              <li class="tab-title"><a href="#panel4">FAQs</a></li>
            </ul>
            <div class="tabs-content"> 
              <div class="content active" id="buy">
                <div id="buy">
        <div class="row collapse">
            
                <h2>Order <?php echo $productName ?> Direct & Save!</h2>
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
                            <div class="small-12 columns buy-bonus">
                                $4.95 Flat-Rate Shipping
                            </div>
                        </div>
                        <div class="row">
                            <button class="add-to-cart radius success">
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
                            <div class="small-12 columns buy-bonus">
                                Free Ground Shipping!
                            </div>
                            <div class="small-12 columns buy-bonus">
                                1 Free Bottle <span data-tooltip aria-haspopup="true" class="has-tip" title="This is a tool tip. Change me!">
                                    <i class="fa fa-question-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <button class="add-to-cart radius success">
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
                            <div class="small-12 columns buy-bonus">
                                Free Ground Shipping!
                            </div>
                            <div class="small-12 columns buy-bonus">
                                2 Free Bottles <span data-tooltip aria-haspopup="true" class="has-tip" title="This is a tool tip. Change me!">
                                    <i class="fa fa-question-circle"></i>
                                </span>

                            </div>
                        </div>
                        <div class="row">
                            <button class="add-to-cart radius success">
                            Buy Now
                            </button>
                        </div>
                        <input name="add" type="hidden" value="apidren1">
                    </form>
                </div><!-- /.buy3 -->
            
        </div><!-- /.row -->
    </div> <!-- /#buy  -->
              </div>
              <div class="content" id="panel2">
                <div id="testimonials">
        <div class="row">
            <div class="small-12 columns">
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
            </div><!--/.small-12 columns-->
        </div> <!-- /#testimonials  -->
    </div> <!-- /#testimonials  -->
              </div>
              <div class="content" id="ingredients">
                <div id="ingredients">
        <div class="row">
            <div class="small-12 columns">
                <h2>Ingredients</h2>
                <div class="row">
                    <div class="small-3 columns">
                        <img src="<?php get_image();?>/">
                    </div> <!-- / .medium-3 -->
                    <div class="small-9 columns">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    </div> <!-- / .medium-9 -->
                </div> <!-- / .row -->
                <div class="row">
                    <div class="small-3 columns">
                        <img src="<?php get_image();?>/">
                    </div> <!-- / .medium-3 -->
                    <div class="small-9 columns">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    </div> <!-- / .medium-9 -->
                </div> <!-- / .row -->
                <div class="row">
                    <div class="small-3 columns">
                        <img src="<?php get_image();?>/">
                    </div> <!-- / .medium-3 -->
                    <div class="small-9 columns">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in cursus arcu. Aenean cursus faucibus eleifend. Quisque a felis scelerisque, egestas nulla sed, venenatis ligula. Aliquam arcu justo, faucibus et hendrerit ut, lacinia in nunc. Aenean non ligula eu dui feugiat lobortis. Fusce mattis urna quis dui tristique, tristique pellentesque nunc hendrerit. Proin consectetur eros tellus, eget blandit urna pharetra maximus.</p>
                    </div> <!-- / .medium-9 -->
                </div> <!-- / .row -->

            </div> <!-- / .small-12 -->
        </div> <!-- / .row -->
    </div> <!-- /#ingredients  -->
              </div>
              <div class="content" id="panel4">
                <div id="faq" class="expandable">
        <div class="row">
            <div class="small-12 columns">
                <div class="row">
                    <div class="small-12 medium-9 columns">
                        <h2>Frequently Asked Questions</h2>
                    </div> <!-- / .small-9 -->
                    <div class="small-12 medium-3 columns">
                        <div class="show-hide-all" data-text-swap='Hide All <i class="fa fa-minus-square-o"></i>' data-text-original='Show All <i class="fa fa-plus-square-o"></i>'></div>
                    </div> <!-- / .small-12 -->
                </div> <!-- / .row -->
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <h5>Product Questions</h5>
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                    </div> <!-- / .columns -->
                    <div class="small-12 medium-6 columns">
                        <h5>Order Questions</h5>
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                        <div class="q-a">
                            <div class="q">
                                Question?
                            </div> <!-- / .q -->
                            <div class="a">
                                Answer
                            </div> <!-- / .a -->
                        </div> <!-- / .q-a -->
                    </div> <!-- / .columns -->
                    <div class="small-12 columns">
                        <p class="contact">Still have questions?
                            <a href="parts/contact.php" data-reveal-ajax="true" data-reveal-id="support">Contact Our Support Team</a>
                        </p>
                    </div> <!-- / .columns -->
                </div> <!-- / .row -->
            </div> <!-- / .small-12 -->
        </div> <!-- /#faq  -->
    </div> <!-- /#faq  -->
              </div>
            </div>
        </div> <!-- / .columns -->
    </div> <!-- / .row -->
    
    
<?php get_footer(); ?>
