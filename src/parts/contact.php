<div id="contact-form">
<h2>Contact Us</h2>
<p>Ready to Order or want to speak to a friendly customer service representative? Please feel free to call us toll free at 877-209-2485 or click our live chat link at the top of the page.</p>

<p>For Returns:
<br/>
4778 North 300 West, Suite 120<br>
Provo, UT 84604</p>

<h2>Email:</h2>
<p>For any questions about Tricellvox or your order, please don't hesitate to contact our customer service department by sending an email to <a href="mailto:support@hairlastin.com">support@hairlastin.com</a>, or you can simply fill out the form below and we guarantee a response within 1 business day.</p>


<div id="feedback">
    <?php
        function getRecipients( $re ){
            switch( $re ){
                default: $_POST['re'] = 'Comments or Questions'; return 'support@hairlastin.com';
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

        <input type="submit" id="submit" value="Send Email">
    </form>
</div><!--end of div#feedback-->

</div><!--end of div#contact-form-->
