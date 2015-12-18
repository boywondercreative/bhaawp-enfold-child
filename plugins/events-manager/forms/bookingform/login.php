<?php
/* 
 * This file generates the default login form within the booking form (if enabled in options).
 */
?>
<div class="em-booking-login">
	<form class="em-booking-login-form" action="<?php echo site_url('wp-login.php', 'login_post'); ?>" method="post">
	<p><?php esc_html_e('Existing BHAA members should first Login to ensure they can access the discounted rates and their ticket is linked to the correct BHAA ID. New runners should just fill out the form below and a new account will be created for you.','dbem'); ?></p>
    <p>
		<label><?php esc_html_e( 'Email','dbem' ) ?></label>
		<input type="text" name="log" class="input" value="" />
	</p>
	<p>
		<label><?php esc_html_e( 'Password','dbem' ) ?></label>
		<input type="password" name="pwd" class="input" value="" />
    </p>
    <?php do_action('login_form'); ?>
	<input type="submit" name="wp-submit" id="em_wp-submit" value="<?php esc_html_e('Log In', 'dbem'); ?>" tabindex="100" />
	<input name="rememberme" type="checkbox" id="em_rememberme" value="forever" /> <label><?php esc_html_e( 'Remember Me','dbem' ) ?></label>
	<input type="hidden" name="redirect_to" value="<?php echo esc_url($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']); ?>#em-booking" />
	<br />
	<?php
	//Signup Links
	if ( get_option('users_can_register') ) {
		echo "<br />";  
		if ( function_exists('bp_get_signup_page') ) { //Buddypress
			$register_link = bp_get_signup_page();
		}elseif ( file_exists( ABSPATH."/wp-signup.php" ) ) { //MU + WP3
			$register_link = site_url('wp-signup.php', 'login');
		} else {
			$register_link = site_url('wp-login.php?action=register', 'login');
		}
		?>
		<a href="<?php echo $register_link ?>"><?php esc_html_e('Sign Up','dbem') ?></a>&nbsp;&nbsp;|&nbsp;&nbsp; 
		<?php
	}
	?>
	<p>If you have run a previously ran a BHAA race, we should have an existing account for you but perhaps not a valid email address. Please <a href="mailto:info@bhaa.ie">email</a> us and we can reset your correct email address.</p>
	<a href="<?php echo site_url('wp-login.php?action=lostpassword', 'login') ?>" title="<?php esc_html_e('Password Lost and Found', 'dbem') ?>"><?php esc_html_e('Lost your password?', 'dbem') ?></a>                        
  </form>
</div>