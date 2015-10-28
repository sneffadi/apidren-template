    </section>
    <div id="footer-container">
        <footer id="footer">
            <ul class="inline-list">
                <li><?php get_copyright();?></li>
                <li><a href="http://product.dev/src/files/terms.php" data-reveal-ajax="true" data-reveal-id="support">Terms & Conditions</a></li>
                <li><a href="http://product.dev/src/files/privacy.php" data-reveal-ajax="true" data-reveal-id="support">Privacy Policy</a></li>
                <li><a href="http://product.dev/src/parts/testimonial.php" data-reveal-ajax="true" data-reveal-id="support">Testimonial Disclaimer</a></li>
            </ul>
            <div class="disclaimer">
                <p><?php get_fda_disclaimer(); ?></p>
            </div> <!-- / .disclaimer -->
        </footer>
    </div>
    <a class="exit-off-canvas"></a><!-- / .exit-off-canvas -->
    </div><!-- / .inner-wrap -->
</div><!-- / .off-canvas-wrap -->
<script src="assets/javascript/foundation.js"></script>
<?php get_ga($gaID); ?>
<?php get_livechat(); ?>
</body>
</html>
