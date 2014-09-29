<!DOCTYPE html>
<!--[if !IE]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<!--[if IE 9]>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js ie9">
<![endif]-->
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js ie8">
<![endif]-->
<head>
<meta charset=<?php bloginfo('charset'); ?> />
<title><?php bloginfo('name'); ?> | <?php is_home() || is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
<?php require(gp_inc . 'options.php'); ?>
<?php require(gp_inc . 'page-settings.php'); ?>
<?php if(get_option($dirname.'_responsive') == "0") { ?><meta name="viewport" content="width=device-width, initial-scale=1"><?php } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class($gp_settings['layout']); ?>>

<?php global $dirname; ?>


<?php if(!is_page_template('blank-page.php')) { ?>


	<!-- BEGIN PAGE WRAPPER-->
 
	
 	
 	<div class="container-fluid fill header">
 
		<!-- BEGIN HEADER -->
	<div class="row">
		<div id="header" class="col-sm-12">

			<div class="col-sm-4 text-left col-sm-offset-1">
				<a href="http://datactive.net/wordpress/" style="text-decoration:none;">J'aime pas cuisiner</a>
			</div>
			
			<!-- BEGIN NAV WRAPPER -->	
			
			<div class="col-sm-3  col-sm-offset-4 text-center">
			
				<!-- BEGIN NAV -->	
			
			
				<!-- END NAV -->	
			
			
				<!-- BEGIN LOGIN/REGISTER -->
			
				<?php if(get_option($dirname."_bp_buttons") == "0" && function_exists('bp_is_active')) { ?>
				
					<div class="clear"></div>
							
					<div id="bp-buttons">
				
						<?php if(is_user_logged_in()) { ?>	
							

							<a href=<?php echo bp_loggedin_user_domain(); ?>><button class="btn btn-primary"><?php _e('Mon Profil', 'gp_lang'); ?></button></a>	
							<!-- <a href="<?php echo wp_logout_url(esc_url($_SERVER['REQUEST_URI'])); ?>"><button class="btn btn-warning"><?php _e('Deconnexion', 'gp_lang'); ?></button></a> -->
	
						<?php } else { ?>
							<?php if(bp_get_signup_allowed()) { ?><a href="<?php echo bp_get_signup_page(false); ?>"> <button class="btn btn-info"><?php _e('S&#39;inscrire', 'gp_lang'); ?></button></a><?php } ?>

							<a href="<?php if(get_option($dirname."_login_url")) { echo get_option($dirname."_login_url"); } else { echo wp_login_url(); } ?>"> <button class="btn btn-primary"><?php _e('Se Connecter', 'gp_lang'); ?></button></a>
						
							
						
						<?php } ?>
				
					</div>
				
				<?php } ?>
			
				<!-- END LOGIN/REGISTER -->
		
		
		
			<!-- END NAV -->
		
		</div>	
		</div>
		</div>
		</div>
	
		<!-- END HEADER -->
	
	
		<!-- BEGIN CONTENT WRAPPER -->
	
		<div id="content-wrapper">

			
			<!-- BEGIN LEFT CONTENT WRAPPER -->
			
			<div id="">		

<?php } ?>			