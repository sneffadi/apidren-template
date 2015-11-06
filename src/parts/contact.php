<?php include("../load.php") ?>
<div id="contact-form">
<a class="close-reveal-modal" aria-label="Close">&#215;</a>
<h2>Contact Support</h2>
<p>Ready to order or want to speak to customer support? Feel free to call us toll free at <?php echo $phoneNumber ;?></p>

<h2>Email:</h2>
<p>For any questions about <?php echo $productName; ?> or your order, please don't hesitate to contact customer support by sending an email to <a href="mailto:<?php echo $supportEmail; ?>"><?php echo $supportEmail; ?></a>, or you can simply fill out the form below and we you will get a response within 1 business day.</p>


<div id="feedback">
    <?php
        function getRecipients( $re ){
            switch( $re ){
                default: $_POST['re'] = 'Comments or Questions'; return $supportEmail;;
            }
        }
        function valid_email(){
            $email_errs = array();
            $regex_email = "^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$";

            if( $_POST['name']=='' )
                $email_errs[] = 'Name';
            if( !eregi($regex_email,$_POST['replyaddy']) )
                $email_errs[] = 'Email';
            if( $_POST['subject']=='' )
                $email_errs[] = 'Subject';
            if( $_POST['body']=='' )
                $email_errs[] = 'Message';


            $_POST['body'] = trim($_POST['body']);
            $_POST['body'] = mysql_escape_string($_POST['body']);
            $_POST['body'] = htmlentities($_POST['body']);
            if( sizeof($email_errs)>0 )
                echo '<p>The following fields need to be corrected: <span class="bold">'.implode(", ",$email_errs).'</span>.</p>';
            return empty($email_errs)? true : false;
        }

        if( isset($_POST['cmd']) && $_POST['cmd']=='email' && valid_email() ){
            $data = "";
            $sent = mail( getRecipients($_POST['re']), $_POST['subject'], $_POST['body'].$data, 'From: '.$_POST['name'].' <'.$_POST['replyaddy'].'>' );

            if( $sent ){
                echo '<p class="green">Email Sucessfully Sent.</p>';
                $_POST = array();
            }
            else echo '<p class="red">Email Failed.</p>';
        }
    ?>

    <form action="" method="post" id="email_form">
        <input type="hidden" name="cmd" value="email" />

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" />

        <label for="replyaddy">Email:</label>
        <input type="text" name="replyaddy" id="replyaddy" value="<?php if(isset($_POST['replyaddy'])) echo $_POST['replyaddy']; ?>" />

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject']; ?>" />

        <label for="body">Message:</label>
        <textarea name="body" id="body"><?php if(isset($_POST['body'])) echo $_POST['body']; ?></textarea>

        <button type="submit" id="submit" class="button success radius send-email">Send Email</button>
    </form>
</div><!--end of div#feedback-->

<div><strong>Send Returns To:</strong></div>
<?php
    echo "<div>" . $companyName . "<br>";
    echo $addressOne . "<br>";
    echo $addressTwo . "<br>";
    echo $cityStateZip;
    echo "</div>";
?>

</div><!--end of div#contact-form-->
