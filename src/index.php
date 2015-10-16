<?php require_once( "load.php" );?>
<?php get_header();?>


<div class="row">
    <div class="small-12 columns">
        <?php include 'templates/kitchen-sink.php';?>

        <div id="faq">
            <h3>Frequently Asked Questions</h3>
            <!-- <div class="text-swap" data-text-swap="Hide All [-]">Show All [+]</div> -->
            <div class="row">
                <div class="small-6 columns">
                    <h5>Product Questions</h5>
                    <div class="q-a">
                        <div class="q">
                            Question?
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
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
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                    <div class="q-a">
                        <div class="q">
                            Question?
                        </div> <!-- / .qu -->
                        <div class="a">
                            Answer
                        </div> <!-- / .ans -->
                    </div> <!-- / .q-a -->
                </div> <!-- / .columns -->
                <div class="small-12 columns">
                    <h5>Still have questions?
                        <a href="http://product.dev/src/parts/contact.php" data-reveal-ajax="true" data-reveal-id="support" >Contact Our Support Team</a>
                    </h5>
                    <div id="support" class="reveal-modal" data-reveal></div><!-- / #support keep empty -->
                </div> <!-- / .columns -->
            </div> <!-- / .row -->
        </div> <!-- /#faq  -->

    </div> <!-- / .columns -->
</div> <!-- / .row -->
<?php get_footer();?>
