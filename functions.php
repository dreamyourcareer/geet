<?php

function ict_body_class( $classes ) {
	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
		$classes[] = 'sidebar';

	if ( ! get_option( 'show_avatars' ) )
		$classes[] = 'no-avatars';

	return $classes;
}
add_filter( 'body_class', 'ict_body_class' );

function ict_theme_customizer( $wp_customize ) {
    // Fun code will go here
	
	$wp_customize->add_section( 'ict_logo_section' , array(
    'title'       => __( 'Logo', 'ict' ),
    'priority'    => 30,
    'description' => 'Upload a logo in the header',
) );

$wp_customize->add_setting( 'ict_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ict_logo', array(
    'label'    => __( 'Logo', 'ict' ),
    'section'  => 'ict_logo_section',
    'settings' => 'ict_logo',
) ) );
	
	
	
	
	$wp_customize->add_section( 'ict_home_banner_section' , array(
    'title'       => __( 'Home Banner', 'ict' ),
    'priority'    => 30,
    'description' => 'Upload Image to place as home banner.',
) );

$wp_customize->add_setting( 'ict_home_banner' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ict_home_banner', array(
    'label'    => __( 'Home Banner', 'ict' ),
    'section'  => 'ict_home_banner_section',
    'settings' => 'ict_home_banner',
) ) );




	
	$wp_customize->add_section( 'ict_home_banner_logo_section' , array(
    'title'       => __( 'Home Banner Logo', 'ict' ),
    'priority'    => 30,
    'description' => 'Upload Image to place as home banner.',
) );

$wp_customize->add_setting( 'ict_home_banner_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ict_home_banner_logo', array(
    'label'    => __( 'Home Banner Logo', 'ict' ),
    'section'  => 'ict_home_banner_logo_section',
    'settings' => 'ict_home_banner_logo',
) ) );
	
	$wp_customize->add_section( 'social_settings', array(
     'title' => __( 'Social Media Icons', 'ict' ),
     'priority' => 100,
 ));
  $social_sites = ict_get_social_sites();
 $priority = 5;
 
 foreach( $social_sites as $social_site ) {
 
     $wp_customize->add_setting( "$social_site", array(
         'type' => 'theme_mod',
         'capability' => 'edit_theme_options',
         'sanitize_callback' => 'esc_url_raw',
     ));
 
     $wp_customize->add_control( $social_site, array(
         'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
         'section' => 'social_settings',
         'type' => 'text',
         'priority' => $priority,
     ));
 
     $priority += 5;
 }
 
	
}
add_action( 'customize_register', 'ict_theme_customizer' );




 function ict_get_social_sites() {
 
     // Store social site names in array
     $social_sites = array(
         'facebook', 
         'instagram', 
         'twitter',
         'vimeo'
     );
 return $social_sites;
}

function ict_show_social_icons() {
 
     $social_sites = ict_get_social_sites();
 
     // Any inputs that aren't empty are stored in $active_sites array
     foreach( $social_sites as $social_site ) {
         if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
             $active_sites[] = $social_site;
         }
     }
 
     // For each active social site, add it as a list item
      if ( !empty( $active_sites ) ) {
         echo "<ul>";
 
         foreach ( $active_sites as $active_site ) { ?>

             <li class="fb-icon">
             <a href="<?php echo get_theme_mod( $active_site ); ?>" target="_blank">
             <?php if( $active_site == 'facebook' ) { ?>
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-fb.png" alt="" > <?php
             } else if( $active_site == 'instagram' ) { ?>
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-insta.png" alt="" ><?php
             }

else if( $active_site == 'twitter' ) { ?>
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-twt.png" alt=""><?php
             }
			 
			 else if( $active_site == 'vimeo' ) { ?>
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-vim.png" alt="" ><?php
             }


			 else { ?>
                  <?php
             } ?>
             </a>
             </li> <?php
         }
         echo "</ul>";
     }
}

// Primotech UT -----------------------------------------------------------------

if ( ! function_exists( 'ict_paging_nav' ) ) :
function ict_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav>
		<h1><?php _e( 'Posts navigation', 'ict' ); ?></h1>
		<div>

			<?php if ( get_next_posts_link() ) : ?>
			<div><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'ict' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'ict' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;



if ( ! function_exists( 'ict_post_nav' ) ) :
function ict_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav>
		<h1><?php _e( 'Post navigation', 'ict' ); ?></h1>
		<div>

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'ict' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'ict' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;


if ( ! function_exists( 'ict_entry_meta' ) ) :

function twentythirteen_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . esc_html__( 'Sticky', 'ict' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		ict_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'ict' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'ict' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'ict' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;


if ( ! function_exists( 'ict_entry_date' ) ) :

function ict_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'ict' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'ict' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;

//--------


if ( ! function_exists( 'ict_the_attached_image' ) ) :

function ict_the_attached_image() {

	$attachment_size     = apply_filters( 'ict_attachment_size', array( 724, 724 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();


	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( reset( $attachment_ids ) );
	}

	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

//--------

function ict_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

if ( ! function_exists( 'ict_excerpt_more' ) && ! is_admin() ) :

function ict_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
			/* translators: %s: Name of current post */
			sprintf( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ict' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'ict_excerpt_more' );
endif;

//UT offffffffffffffff-------------------------------------


function ict_register_theme_menu() {
    register_nav_menu( 'primary', 'Logo Left Menu' );
	register_nav_menu( 'secondary', 'Logo Right Menu' );
}
add_action( 'init', 'ict_register_theme_menu' );



    require_once('wp_bootstrap_navwalker.php');


	
	function ict_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'ict' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'ict' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ict_widgets_init' );

