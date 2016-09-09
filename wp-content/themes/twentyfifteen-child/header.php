<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script type="text/javascript">
					var slideIndex = 1;
					showSlides(slideIndex);

					function plusSlides(n) {
					  showSlides(slideIndex += n);
					}

					function currentSlide(n) {
					  showSlides(slideIndex = n);
					}

					function showSlides(n) {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("dot");
					  if (n > slides.length) {slideIndex = 1} 
					  if (n < 1) {slideIndex = slides.length}
					  for (i = 0; i < slides.length; i++) {
					      slides[i].style.display = "none"; 
					  }
					  for (i = 0; i < dots.length; i++) {
					      dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block"; 
					  dots[slideIndex-1].className += " active";
					}


				
</script>
 


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						



						
					<?php endif;



					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
            				<div class="slideshow-container" >
									  <div class="mySlides fade">
									    <div class="numbertext">1 / 3</div>
									    <img src="/new/wp-content/uploads/2016/09/01/hello-world/img1.jpg" style="width:100%">
									    <div class="text">Caption Text</div>
									  </div>

									  <div class="mySlides fade">
									    <div class="numbertext">2 / 3</div>
									    <img src="/new/wp-content/uploads/2016/09/01/hello-world/img2.jpg" style="width:100%">
									    <div class="text">Caption Two</div>
									  </div>

									  <div class="mySlides fade">
									    <div class="numbertext">3 / 3</div>
									    <img src="/new/wp-content/uploads/2016/09/01/hello-world/img3.jpg" style="width:100%">
									    <div class="text">Caption Three</div>
									  </div>

									  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
									  <a class="next" onclick="plusSlides(1)">&#10095;</a>
									</div>
									<br>

									<div style="text-align:center">
									  <span class="dot" onclick="currentSlide(1)"></span> 
									  <span class="dot" onclick="currentSlide(2)"></span> 
									  <span class="dot" onclick="currentSlide(3)"></span> 
									</div>
