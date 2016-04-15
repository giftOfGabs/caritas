<?php
add_action( 'wp_enqueue_scripts', 'mysite_enqueue' );

function mysite_enqueue() {
  $ss_url = get_stylesheet_directory_uri();
  wp_enqueue_script( 'mysite-scripts', "{$ss_url}/scripts.js" );
}

add_action ('__before_footer' , 'add_content_before_footer', 20);
function add_content_before_footer(){
	?>
	<div class="blueBorder blueBorder3"></div>
	
	<?php
}

add_action('__before_navbar', 'add_header_cta', 20);
function add_header_cta() {
	if ( is_user_logged_in() ) {
	?>
		<div class="ctaWrap loggedIn">
			<a class="ctaBtn" href="/calendar">Calendar <i class="fa fa-calendar-o"></i></a>
			<a class="ctaBtn" href="/search">Search <i class="fa fa-search"></i></a>
			<a class="ctaBtn last" href="/wp-login.php?action=logout&redirect_to=http%3A%2F%2Fcaritas.charitydynamics.com%2F%3Floggedout%3Dtrue">Logout <i class="fa fa-power-off"></i></a>
		</div>
	<?php
	}else{
	?>
		<style>
			.row-fluid .navbar-wrapper.span9{display: none;}
			.dwpb-close, #dwpb{display: none}
			body.dwpb-push-page.dwpb-open{top:0 !important;}
			.home.dwpb-push-page header{top: 0 !important;}

		</style>
		<div class="ctaWrap loggedOut">
			<a class="ctaBtn" href="/wp-login.php">Log In <i class="fa fa-lock"></i></a>
		</div>
	<?php

	}
}
//Creating Hero Image section
add_action ('__after_header' , 'add_content_after_header', 20);
function add_content_after_header() {
 if ( !tc__f( '__is_home' ) )
 return;
 ?>
 	<div id="my-content-header">
 		<img class="hero hero1" src="http://caritas.charitydynamics.com/wp-content/uploads/2015/11/hero1.jpg" />
 		<div class="orange tagline">
			<div class="container">
				<h1>A collaborative <strong>preventing</strong> and <strong>ending homelessness</strong> in Austin and Travis County since 2005</h1>
			</div>
		</div> 
 		<img class="hero hero2" src="http://caritas.charitydynamics.com/wp-content/uploads/2015/11/hero2.jpg" />
	</div>
	<div class="blueBorder blueBorder1"></div>
 <?php
}

//adds the page before featured pages. Note the priority set to 0 in the action declaration => will tell WordPress to add the action before any other (featured pages have a priority of 10 on this very same hook)
add_action  ( '__before_main_container', 'display_content_before', 0 );
function display_content_before(){
   if ( !tc__f('__is_home') )
        return;
    	//gets the page object from your database
    	$mission = get_post(67); 
    	$impact = get_post(69);
    	$impactBlock1 = get_post(58);
    	$impactBlock2 = get_post(60);
    	$impactBlock3 = get_post(65);
    	$partnerHeadline = get_post(71);
    	$partnerIntro = get_post(75);
    	$partner1 = get_post(79);
    	$partner2 = get_post(82);
    	$partner3 = get_post(85);
    	$partner4 = get_post(88);
    	$partner5 = get_post(91);
    	$partner6 = get_post(94);
    	$partner7 = get_post(97);
    	$partner8 = get_post(100);
    	$partner9 = get_post(103);
    	$partner10 = get_post(106);
    	$partner11 = get_post(109);
    	$partner12 = get_post(112);
    	$partner13 = get_post(115);
    	$support1 = get_post(745);
    	$support2 = get_post(749);
    	
    ?>
    <div class="mission container">		
 		<article>
  			<div class="entry-content">
      			<?php echo apply_filters('the_content' , $mission -> post_content ); ?>
  			</div>
  			<div class="callout left">
  				<img src="wp-content/uploads/2015/11/visionImg.jpg" alt="smiling man" />
  				<h2>Our Vision</h2>
  				<p>For all Central Texas residents to have <br />stable housing</p>
			</div>
			<div class="callout right">
				<img src="wp-content/uploads/2015/11/missionImg.jpg" alt="two women smiling" />
				<h2>Our Mission</h2>
				<p>Prevent homelessness &amp; support housing stability for Central Texas residents</p>
				
			</div>
			<div class="clear"></div>
 		</article>
 	</div>
 	<div class="blueBorder blueBorder2"></div>
 	<div class="grey headline">
 		<h1>Our Impact</h1>
	</div>
	<div class="impact container">			
 		<article>
  			<div class="entry-content">
      			<?php echo apply_filters('the_content' , $impact -> post_content ); ?>
  			</div>
 		</article>     	
     	<div class="fpc-container fpc-marketing">
		 	<div class="fpc-row-fluid fpc-widget-area rounded" role="complementary">
		 		<div class="fpc-span4 fp-one">
			        <div class="fpc-widget-front">
			            <div class="thumb-wrapper tc-holder ">	
			            	<a class="round-div" href=""></a>
			            	<?php echo get_the_post_thumbnail(58); ?>	            
			            </div>			            
		        	</div><!-- /.fpc-widget-front -->
		        	<?php echo apply_filters('the_content' , $impactBlock1 -> post_content ); ?>
		         </div>
		         <div class="fpc-span4 fp-two">
		          	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">
		            		<a class="round-div" href=""></a>
		            		<?php echo get_the_post_thumbnail(60); ?>
		            	</div>		      
		          	</div><!-- /.fpc-widget-front -->
		          	<?php echo apply_filters('the_content' , $impactBlock2 -> post_content ); ?>
		        </div>
		        <div class="fpc-span4 fp-three">
		        	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">	
		            		<a class="round-div" href=""></a>	            		
		            		<?php echo get_the_post_thumbnail(65); ?>
		            	</div>		            	
		          	</div><!-- /.fpc-widget-front -->
		          	<?php echo apply_filters('the_content' , $impactBlock3 -> post_content ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="blueBorder blueBorder3"></div>
	<div class="partnersHero">
		<div class="partnerWrap desk">
			<div class="partnerHeadline">
				<?php echo apply_filters('the_content' , $partnerHeadline -> post_content ); ?>
			</div>
		</div>
	</div>
	<div class="partnerWrap mobile">
		<div class="partnerHeadline">
			<?php echo apply_filters('the_content' , $partnerHeadline -> post_content ); ?>
		</div>
	</div>
	<div class="blueBorder blueBorder4"></div>
	<div class="partners container">			
		<?php echo apply_filters('the_content' , $partnerIntro -> post_content ); ?>
	</div>
	<div class="partnerList container">
		<div class="fpc-container fpc-marketing">
		 	<div class="fpc-row-fluid fpc-widget-area rounded" role="complementary">
		 		<div class="fpc-span4 fp-one">
			        <div class="fpc-widget-front">
			            <div class="thumb-wrapper tc-holder ">	
			            	<?php echo get_the_post_thumbnail(79); ?>	            	
			            </div>
			            <h2><?php echo get_the_title(79); ?></h2>
			            <?php echo apply_filters('the_content' , $partner1 -> post_content ); ?>
		        	</div><!-- /.fpc-widget-front -->
		         </div>
		         <div class="fpc-span4 fp-two">
		          	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">
		            		<?php echo get_the_post_thumbnail(82); ?>
		            	</div>
		            	<h2><?php echo get_the_title(82); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner2 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
		        </div>
		        <div class="fpc-span4 fp-three">
		        	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">		            		
		            		<?php echo get_the_post_thumbnail(85); ?>
		            	</div>
		            	<h2><?php echo get_the_title(85); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner3 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
				</div>
			</div>
			<div class="fpc-row-fluid fpc-widget-area rounded" role="complementary">
		 		<div class="fpc-span4 fp-one">
			        <div class="fpc-widget-front">
			            <div class="thumb-wrapper tc-holder ">	
			            	<?php echo get_the_post_thumbnail(88); ?>	            	
			            </div>
			            <h2><?php echo get_the_title(88); ?></h2>
			            <?php echo apply_filters('the_content' , $partner4 -> post_content ); ?>
		        	</div><!-- /.fpc-widget-front -->
		         </div>
		         <div class="fpc-span4 fp-two">
		          	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">
		            		<?php echo get_the_post_thumbnail(91); ?>
		            	</div>
		            	<h2><?php echo get_the_title(91); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner5 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
		        </div>
		        <div class="fpc-span4 fp-three">
		        	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">		            		
		            		<?php echo get_the_post_thumbnail(94); ?>
		            	</div>
		            	<h2><?php echo get_the_title(94); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner6 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
				</div>
			</div>
			<div class="fpc-row-fluid fpc-widget-area rounded" role="complementary">
		 		<div class="fpc-span4 fp-one">
			        <div class="fpc-widget-front">
			            <div class="thumb-wrapper tc-holder ">	
			            	<?php echo get_the_post_thumbnail(97); ?>	            	
			            </div>
			            <h2><?php echo get_the_title(97); ?></h2>
			            <?php echo apply_filters('the_content' , $partner7 -> post_content ); ?>
		        	</div><!-- /.fpc-widget-front -->
		         </div>
		         <div class="fpc-span4 fp-two">
		          	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">
		            		<?php echo get_the_post_thumbnail(100); ?>
		            	</div>
		            	<h2><?php echo get_the_title(100); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner8 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
		        </div>
		        <div class="fpc-span4 fp-three">
		        	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">		            		
		            		<?php echo get_the_post_thumbnail(103); ?>
		            	</div>
		            	<h2><?php echo get_the_title(103); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner9 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
				</div>
			</div>
			<div class="fpc-row-fluid fpc-widget-area rounded" role="complementary">
		 		<div class="fpc-span4 fp-one">
			        <div class="fpc-widget-front">
			            <div class="thumb-wrapper tc-holder ">	
			            	<?php echo get_the_post_thumbnail(106); ?>	            	
			            </div>
			            <h2><?php echo get_the_title(106); ?></h2>
			            <?php echo apply_filters('the_content' , $partner10 -> post_content ); ?>
		        	</div><!-- /.fpc-widget-front -->
		         </div>
		         <div class="fpc-span4 fp-two">
		          	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">
		            		<?php echo get_the_post_thumbnail(109); ?>
		            	</div>
		            	<h2><?php echo get_the_title(109); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner11 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
		        </div>
		        <div class="fpc-span4 fp-three">
		        	<div class="fpc-widget-front">
		            	<div class="thumb-wrapper tc-holder ">		            		
		            		<?php echo get_the_post_thumbnail(112); ?>
		            	</div>
		            	<h2><?php echo get_the_title(112); ?></h2>
		            	<?php echo apply_filters('the_content' , $partner12 -> post_content ); ?>
		          	</div><!-- /.fpc-widget-front -->
				</div>
			</div>
			<div class="fpc-row-fluid fpc-widget-area rounded last" role="complementary">
		 		<div class="fpc-span4 fp-one">
			        <div class="fpc-widget-front">
			            <div class="thumb-wrapper tc-holder ">	
			            	<?php echo get_the_post_thumbnail(115); ?>	            	
			            </div>
			            <h2><?php echo get_the_title(115); ?></h2>
			            <?php echo apply_filters('the_content' , $partner13 -> post_content ); ?>
		        	</div><!-- /.fpc-widget-front -->
		         </div>
			</div>
		</div>
	</div>
	<div class="supportersWrap container">
		<h3>Supported by</h3>
		<div class="supporter">
			<?php echo get_the_post_thumbnail(745); ?>
		</div>
		<div class="supporter">
			<?php echo get_the_post_thumbnail(749); ?>
		</div>
		<div class="supporter">
			<?php echo get_the_post_thumbnail(752);?>
		</div>
		<div class="supporter">
			<?php echo get_the_post_thumbnail(754);?>
		</div>
		<div class="supporter">
			<?php echo get_the_post_thumbnail(756);?>
		</div>
		<div class="clear"></div>
	</div>
    <?php
}

//ADDING SHORTCODE TO EMBED DEFAULT SITE SEARCH INTO PAGE
add_shortcode('wpbsearch', 'get_search_form');


add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}

