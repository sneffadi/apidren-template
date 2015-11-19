    </section>
    </div> <!-- end row.body-wrap-->
    <div id="footer-container">
        <footer id="footer">
        <div class="row">
            <div class="small-12 columns">
                <ul class="inline-list">
                    <li><?php get_copyright();?></li>
                    <li><a href="files/terms.php" data-reveal-ajax="true" data-reveal-id="support">Terms & Conditions</a></li>
                    <li><a href="files/privacy.php" data-reveal-ajax="true" data-reveal-id="support">Privacy Policy</a></li>
                    <li><a href="files/testimonial.php" data-reveal-ajax="true" data-reveal-id="support">Testimonial Disclaimer</a></li>
                </ul>
                <div class="disclaimer">
                    <p><?php get_fda_disclaimer(); ?></p>
                </div> <!-- / .disclaimer -->
            </div> <!-- / .small-12 -->
        </div> <!-- / .row -->
        </footer>
    </div>
    <a class="exit-off-canvas"></a><!-- / .exit-off-canvas -->
    </div><!-- / .inner-wrap -->
</div><!-- / .off-canvas-wrap -->
<div id="support" class="reveal-modal medium" data-reveal></div><!-- / #support keep empty -->
<script src="assets/javascript/foundation.js"></script>
<?php get_ga($gaID); ?>
<?php get_livechat(); ?>
</body>
</html>
