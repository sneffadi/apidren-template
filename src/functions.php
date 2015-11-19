<?php
    function get_header() {
        include ABSPATH . "parts/header.php";
    }
    function get_footer() {
        include ABSPATH . "parts/footer.php";
    }
    function get_off_canvas_menu() {
        include ABSPATH . "parts/off-canvas-menu.php";
    }
    function get_menu() {
        //include ABSPATH . "parts/top-bar.php"; //top nav with dropdown
        include ABSPATH . "parts/top-bar2.php"; //top nav without dropdown
    }
    function get_image() {
        global $url;
        //echo $url . "/assets/images";
        echo $url . "/apidren-template/src/assets/images";
    }
    function get_ga( $gaID = null ) {
        global $gaID;
        if (!empty($gaID)) { ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '<?php echo $gaID; ?>', 'auto');
    window.optimizely = window.optimizely || [];
    window.optimizely.push(['activateUniversalAnalytics']);
    ga('send', 'pageview');
</script>
    <?php
        }
    }
    function get_livechat( $liveChat = null){
        global $liveChat;
         if ( $liveChat == true ) { ?>

<script data-cfasync="false" type='text/javascript'>
    /*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
    f[z]=function(){
    (a.s=a.s||[]).push(arguments)};var a=f[z]._={
    },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
    f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
    0:+new Date};a.P=function(u){
    a.p[u]=new Date-a.p[0]};function s(){
    a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
    hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
    return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
    b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
    b.contentWindow[g].open()}catch(w){
    c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
    var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
    b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
    loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
    /* custom configuration goes here (www.olark.com/documentation) */
    olark.identify('8146-171-10-5400');/*]]>*/
</script>
    <?php
        }
    }
    function get_fonts() {
        global $googlefont, $typekit;
        if ( !empty( $googlefont )) { ?>
            <link href='https://fonts.googleapis.com/css?family=<?php echo $googlefont; ?>' rel='stylesheet' type='text/css'>
        <?php }
        if ( !empty( $typekit ) ) { ?>
            <script type="text/javascript" src="//use.typekit.net/<?php echo $typekit; ?>.js"></script>
            <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <?php }
    }
    function get_year() {
        global $year;
        echo $year;
    }
    function get_site_name() {
        global $host;
        echo ucfirst($host);
    }
    function get_copyright(){
         global $year, $host;
         echo "&copy; 2014-{$year} - ";
         get_site_name();
    }
    function get_fda_disclaimer(){
        echo "These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease. Results in the testimonials may not be typical and your results may vary. Consult your physician before starting any diet, exercise program or supplement to avoid any health issues.";
    }
