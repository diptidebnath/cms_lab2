<?php
function register_my_menu()
{
	register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');




/**
 * Register and Enqueue Styles.
 */
function lab1_register_styles()
{

	$theme_version = wp_get_theme()->get('Version');

	// Add CSS.
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', null, $theme_version);
	wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/assets/css/font-awesome.css', null, $theme_version);
	wp_enqueue_style('maincss-style', get_template_directory_uri() . '/assets/css/style.css', null, $theme_version);
}

add_action('wp_enqueue_scripts', 'lab1_register_styles'); /* hook to add the style */


/**
 * Register and Enqueue Scripts.
 */
function lab1_register_scripts()
{

	$theme_version = wp_get_theme()->get('Version');
	wp_enqueue_script('theme-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), $theme_version, true);
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/script.js', array(), $theme_version, true);
	wp_script_add_data('theme-js', 'async', true);
}

add_action('wp_enqueue_scripts', 'lab1_register_scripts');


/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
add_theme_support('title-tag');

/* This feature enables Post Thumbnails support for a theme. */
add_theme_support('post-thumbnails');


/*Add Widgets to WordPress Theme’s Footer and Sidebar */
register_sidebar(array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
));
register_sidebar(array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
));
register_sidebar(array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
));
/* sidebar */
register_sidebar(array(
	'name' => 'Right Sidebar',
	'id' => 'right-sidebar',
	'description' => 'Appears in the right sideber',
	'before_widget' => '<ul id="%1$s" class="widget %2$s"><li>',
	'after_widget' => '</li></ul>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
));


/* Remove “Category:”, “Tag:”, “Author:” from the_archive_title */
add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_tax()) { //for custom post types
		$title = sprintf(__('%1$s'), single_term_title('', false));
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_search()) {
		$title = "Sökresultat för: " . get_search_query();
	} else {
		$title = "Blogg";
	}
	return $title;
});


/*
** pagination 
** How to Add Numeric Pagination in Your WordPress Theme
** https://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/
*/
function wp_numeric_posts_nav()
{

	if (is_singular())
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ($wp_query->max_num_pages <= 1)
		return;

	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max   = intval($wp_query->max_num_pages);

	/** Add current page to the array */
	if ($paged >= 1)
		$links[] = $paged;

	/** Add the pages around the current page to the array */
	if ($paged >= 3) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if (($paged + 2) <= $max) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<nav class="navigation pagination"><h2 class="screen-reader-text">Inläggsnavigering</h2>' . "\n";

	/** Previous Post Link */
	if (get_previous_posts_link())
		printf('%s' . "\n", get_previous_posts_link('Föregående'));

	/** Link to first page, plus ellipses if necessary */
	if (!in_array(1, $links)) {
		$class = 1 == $paged ? ' class="page-numbers current"' : 'class="page-numbers"';

		printf('<a %s href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

		if (!in_array(2, $links))
			echo '<span>…</span>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach ((array) $links as $link) {
		$class = $paged == $link ? ' class="page-numbers current"' : 'class="page-numbers"';
		printf('<a %s href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
	}

	/** Link to last page, plus ellipses if necessary */
	if (!in_array($max, $links)) {
		if (!in_array($max - 1, $links))
			echo '<span>…</span>' . "\n";

		$class = $paged == $max ? ' class="page-numbers current"' : 'class="page-numbers"';;
		printf('<a %s href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
	}

	/** Next Post Link */
	if (get_next_posts_link())
		printf('%s' . "\n", get_next_posts_link('Nästa'));

	echo '</nav>' . "\n";
}

/* 
 ** Add class to links generated by next_posts_link and previous_posts_link
 ** https://css-tricks.com/snippets/wordpress/add-class-to-links-generated-by-next_posts_link-and-previous_posts_link/
 */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
	return 'class="prev page-numbers"';
}
