<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/prism.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
<!--<div class="container-fluid">
	<br>
	<h3>Sticky Navbar</h3>
	<p>A sticky navigation bar stays fixed at the top of the page when you scroll past it.</p>
	<p>Scroll this page to see the effect. <strong>Note:</strong> sticky-top does not work in IE11 and earlier.</p>
</div>-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
	<a class="navbar-brand" href="#">Logo</a>
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>
	</ul>
</nav>
<div class="container">
	<div class="row">
		<main class="col-sm-12 py-3">
			<section class="mb-3 section1">
				<h2>CSS JS include</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function wp_enqueue_scripts_fun() {
							wp_deregister_script('jquery');
							wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array(),null);
							wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700', array(), null);
							wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700', array(), null);
							wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600', array(), null);
							wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', array(), null);
							wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', array(), null);
							wp_enqueue_style('animate-css', get_template_directory_uri().'/css/animate.min.css', array('bootstrap-css'),null);
							wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css',array(),null);
							wp_enqueue_style('style-css', get_template_directory_uri().'/style.css', array(), null);
							wp_enqueue_style('responsive-css', get_template_directory_uri().'/css/responsive.css', array(), null);
							wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),null,true);
							wp_enqueue_script('wow-js', get_template_directory_uri().'/js/wow.min.js', array('jquery'),null,true);
							if(is_front_page()){
								wp_enqueue_script('magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array(),null,true);
							}
							wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array(),null,true);
						}
						add_action('wp_enqueue_scripts', 'wp_enqueue_scripts_fun',11);
					</code>
				</pre>
			</section>
			<section class="mb-3 section2">
				<h2>CSS JS remove</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function wp_enqueue_remove_fun() {
							wp_dequeue_style('wp-block-library');
							wp_dequeue_style('wp-block-library-theme');
							wp_deregister_script('wp-embed');
							wp_dequeue_style('twentysixteen-block-style');
							wp_dequeue_style('genericons');
							wp_dequeue_style('twentysixteen-ie');
							wp_dequeue_style('twentysixteen-ie8');
							wp_dequeue_style('twentysixteen-ie7');
							wp_dequeue_style('twentysixteen-fonts');
							wp_deregister_script('twentysixteen-html5');
							wp_deregister_script('twentysixteen-skip-link-focus-fix');
							wp_deregister_script('twentysixteen-script');
						}
						add_action('wp_enqueue_scripts', 'wp_enqueue_remove_fun',11);

						remove_action('wp_head', 'print_emoji_detection_script', 7 );
						remove_action('wp_print_styles', 'print_emoji_styles', 10 );
						remove_action('wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
						remove_action('wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
						remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
						remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
						remove_action('wp_head', 'index_rel_link'); // index link
						remove_action('wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
						remove_action('wp_head', 'start_post_rel_link', 10, 0 ); // start link
						remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
						remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
						remove_action('wp_head', 'wp_oembed_add_discovery_links');
						remove_action('wp_head', 'rest_output_link_wp_head');
						remove_action('wp_head', 'wp_shortlink_wp_head');
						remove_action('wp_head', 'wp_resource_hints', 2);
						remove_action('wp_head', 'twentysixteen_javascript_detection');

						function remove_recent_comments_style() {
							global $wp_widget_factory;
							remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
						}
						add_action('widgets_init', 'remove_recent_comments_style');
					</code>
				</pre>
			</section>
			<section class="mb-3 section3">
				<h2>ACF option page</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						if ( function_exists('acf_add_options_page') ) {
							acf_add_options_page('Theme Options');
						}
					</code>
				</pre>
			</section>
			<section class="mb-3 section4">
				<h2>Gutenberg disable</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						add_filter('use_block_editor_for_post', '__return_false', 10 );
						add_filter('use_block_editor_for_post_type', '__return_false', 10 );
					</code>
				</pre>
			</section>
			<section class="mb-3 section5">
				<h2>acf admin slug</h2>
				<pre class="line-numbers pre-height">
					<code class="language-markup"><!--
						function my_acf_input_admin_footer() {
						if ( get_post_type() != 'acf-field-group') { ?>
							<script type="text/javascript">
								jQuery(function($) {
									$('#wpwrap').each(function(index) {
										$(this).on('click','.copy-to-clipboard input', function() {
											$(this).focus();
											$(this).select();
											document.execCommand('copy');
											//$(".copied").text("Copied to clipboard").show().fadeOut(1200);
										});
									});
								});
							</script>
							<?php
						}
					}
					add_action('acf/input/admin_footer', 'my_acf_input_admin_footer');

					function show_field_details($field) {
						$field['label'] .= '<div class="description copy-to-clipboard" style="margin-bottom: 10px; margin-top: 10px;">
							<input readonly="readonly" type="text" value="'.trim($field['_name']).'" style="color: #0c5460;">
						</div>';
						return $field;
					}
					// Basic
					add_action('acf/prepare_field/type=text', 'show_field_details', 1);
					add_action('acf/prepare_field/type=textarea', 'show_field_details', 1);
					add_action('acf/prepare_field/type=number', 'show_field_details', 1);
					add_action('acf/prepare_field/type=range', 'show_field_details', 1);
					add_action('acf/prepare_field/type=email', 'show_field_details', 1);
					add_action('acf/prepare_field/type=url', 'show_field_details', 1);
					add_action('acf/prepare_field/type=password', 'show_field_details', 1);

					// Content
					add_action('acf/prepare_field/type=image', 'show_field_details', 1);
					add_action('acf/prepare_field/type=file', 'show_field_details', 1);
					add_action('acf/prepare_field/type=wysiwyg', 'show_field_details', 1);
					add_action('acf/prepare_field/type=oembed', 'show_field_details', 1);
					add_action('acf/prepare_field/type=gallery', 'show_field_details', 1);

					// Choice
					add_action('acf/prepare_field/type=select', 'show_field_details', 1);
					add_action('acf/prepare_field/type=checkbox', 'show_field_details', 1);
					add_action('acf/prepare_field/type=radio', 'show_field_details', 1);
					add_action('acf/prepare_field/type=button_group', 'show_field_details', 1);
					add_action('acf/prepare_field/type=true_false', 'show_field_details', 1);

					// Relational
					add_action('acf/prepare_field/type=link', 'show_field_details', 1);
					add_action('acf/prepare_field/type=post_object', 'show_field_details', 1);
					add_action('acf/prepare_field/type=page_link', 'show_field_details', 1);
					add_action('acf/prepare_field/type=relationship', 'show_field_details', 1);
					add_action('acf/prepare_field/type=taxonomy', 'show_field_details', 1);
					add_action('acf/prepare_field/type=user', 'show_field_details', 1);

					// jQuery
					add_action('acf/prepare_field/type=google_map', 'show_field_details', 1);
					add_action('acf/prepare_field/type=date_picker', 'show_field_details', 1);
					add_action('acf/prepare_field/type=date_time_picker', 'show_field_details', 1);
					add_action('acf/prepare_field/type=time_picker', 'show_field_details', 1);
					add_action('acf/prepare_field/type=color_picker', 'show_field_details', 1);

					// Layout
					//add_action('acf/prepare_field/type=message', 'show_field_details', 1);
					add_action('acf/prepare_field/type=accordion', 'show_field_details', 1);
					//add_action('acf/prepare_field/type=tab', 'show_field_details', 1);
					add_action('acf/prepare_field/type=group', 'show_field_details', 1);
					add_action('acf/prepare_field/type=repeater', 'show_field_details', 1);
					add_action('acf/prepare_field/type=flexible_content', 'show_field_details', 1);
					add_action('acf/prepare_field/type=clone', 'show_field_details', 1);

					function my_acf_field_group_admin_footer() { ?>
						<style>
							.description.copy-to-clipboard {
								display: none !important;
							}
						</style>
						<script type="text/javascript">
							(function( $ ){
								$('.description.copy-to-clipboard').remove();
							})(jQuery);
						</script>
						<?php
					}
					add_action('acf/field_group/admin_footer', 'my_acf_field_group_admin_footer');
					--></code>
				</pre>
			</section>
			<section class="mb-3 section6">
				<h2>Media size remove</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function remove_default_image_sizes( $sizes ) {
							unset( $sizes[ 'thumbnail' ]);
							unset( $sizes[ 'medium' ]);
							unset( $sizes[ 'medium_large' ]);
							unset( $sizes[ 'large' ]);
							unset( $sizes[ '1536x1536' ]);
							unset( $sizes[ '2048x2048' ]);
							return $sizes;
						}
						add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');
					</code>
				</pre>
			</section>
			<section class="mb-3 section7">
				<h2>Span tag</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function myextensionTinyMCE($init) {
							$ext = 'span[id|name|class|style]';
							if ( isset( $init['extended_valid_elements'] ) ) {
								$init['extended_valid_elements'] .= ',' . $ext;
							}
							else {
								$init['extended_valid_elements'] = $ext;
							}
							return $init;
						}
						add_filter('tiny_mce_before_init', 'myextensionTinyMCE');
					</code>
				</pre>
			</section>
			<section class="mb-3 section8">
				<h2>Menu bootstrap 4</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );
						function wpse156165_menu_add_class( $atts, $item, $args ) {
							$class = 'nav-link'; // or something based on $item
							$atts['class'] = $class;
							return $atts;
						}

						add_filter('nav_menu_css_class', 'secondary_li_class', 10, 2 );
						function secondary_li_class( $classes, $item ) {
							global $post;
							$classes[] = 'nav-item';
							// $item echo
							return $classes;
						}
					</code>
				</pre>
			</section>
			<section class="mb-3 section9">
				<h2>Webp support</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function webp_upload_mimes($existing_mimes) {
							$existing_mimes['webp'] = 'image/webp';
							return $existing_mimes;
						}
						add_filter('mime_types', 'webp_upload_mimes');

						//enable preview
						function webp_is_displayable($result, $path) {
							if ($result === false) {
								$displayable_image_types = array( IMAGETYPE_WEBP );
								$info = @getimagesize( $path );
								if (empty($info)) {
									$result = false;
								} elseif (!in_array($info[2], $displayable_image_types)) {
									$result = false;
								} else {
									$result = true;
								}
							}
							return $result;
						}
						add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);
					</code>
				</pre>
			</section>
			<section class="mb-3 section10">
				<h2>VCF support</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function be_enable_vcard_upload( $mime_types ){
							$mime_types['vcf'] = 'text/x-vcard';
							return $mime_types;
						}
						add_filter('upload_mimes', 'be_enable_vcard_upload');
					</code>
				</pre>
			</section>
			<section class="mb-3 section11">
				<h2>Breadcrumbs</h2>
				<pre class="line-numbers pre-height">
					<code class="language-markup"><!--
						function breadcrumbs_func() { ob_start();
							if (function_exists('bcn_display') && !is_front_page() && !is_404()) { ?>
								<div class='breadcrumbs' typeof='BreadcrumbList' vocab='http://schema.org/'>
									<?php
									bcn_display(); ?>
								</div>
							<?php
							}
							return ob_get_clean();
						}
						add_shortcode('breadcrumbs', 'breadcrumbs_func');
					--></code>
				</pre>
			</section>
			<section class="mb-3 section12">
				<h2>WPCF7 thank you</h2>
				<pre class="line-numbers pre-height">
					<code class="language-markup"><!--
						add_action('wp_footer', 'thank_you_redirect');
						function thank_you_redirect(){ ?>
						  <script>
							  document.addEventListener('wpcf7mailsent', function(event) {
								  location = '<?php echo get_permalink( get_page_by_path('thank_you') );?>';
							  }, false);
						  </script>
						  <?php
						}
					--></code>
				</pre>
			</section>
			<section class="mb-3 section13">
				<h2>Page menu order</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function custom_book_column( $column, $post_id ) {
							global $post;
							switch ( $column ) {
								case 'menu_order' :
									echo  $post->menu_order;
								break;
							}
						}
						add_action('manage_page_posts_custom_column' , 'custom_book_column', 100, 2 );

						function set_custom_edit_book_columns($columns) {
							//unset( $columns['author'] );
							$columns['menu_order'] = __('Menu Order', 'southbaylawyer');
							return $columns;
						}
						add_filter('manage_page_posts_columns', 'set_custom_edit_book_columns');

						function my_movie_sortable_columns( $columns ) {
							$columns['menu_order'] = 'menu_order';
							return $columns;
						}
						add_filter('manage_edit-page_sortable_columns', 'my_movie_sortable_columns');
					</code>
				</pre>
			</section>
			<section class="mb-3 section14">
				<h2>Custom permalinks exclude</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						/*
						|--------------------------------------------------------------------------
						| plugin https://wordpress.org/plugins/custom-permalinks/
						|--------------------------------------------------------------------------
						*/
						function yasglobal_exclude_post_types( $post_type ) {
							if ( $post_type == 'test' || $post_type == 'test2') {
								return '__false';
							}
							return '__true';
						}
						add_filter('custom_permalinks_exclude_post_type', 'yasglobal_exclude_post_types');
					</code>
				</pre>
			</section>
			<section class="mb-3 section15">
				<h2>Active class</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						function my_secondary_menu_classes( $classes, $item ) {
							global $post;
							// blog single page
							$classes[] =  get_post_type();
							if ( $item->title == 'Blog' && 'post' == get_post_type() && ( is_singular('post') || is_archive() ) ) {
								$classes[] = 'current-menu-item';
							}
							//print_r $item
							return $classes;
						}
						add_filter('nav_menu_css_class', 'my_secondary_menu_classes', 10, 2 );
					</code>
				</pre>
			</section>
			<section class="mb-3 section16">
				<h2>Remove custom post type slug</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						/*
						|--------------------------------------------------------------------------
						| https://wordpress.org/support/topic/how-to-create-a-custom-post-type-without-extra-slug/
						|--------------------------------------------------------------------------
						*/
						function na_remove_slug( $post_link, $post, $leavename ) {
							if ('events' != $post->post_type || 'publish' != $post->post_status ) {
								return $post_link;
							}
							$post_link = str_replace('/' . $post->post_type . '/', '/', $post_link );
							return $post_link;
						}
						add_filter('post_type_link', 'na_remove_slug', 10, 3 );

						function na_parse_request( $query ) {
							if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
								return;
							}
							if ( ! empty( $query->query['name'] ) ) {
								$query->set('post_type', array('post', 'events', 'page') );
							}
						}
						add_action('pre_get_posts', 'na_parse_request');
					</code>
				</pre>
			</section>
			<section class="mb-3 section17">
				<h2>Wp list pages with meta box</h2>
				<pre class="line-numbers pre-height">
					<code class="language-markup"><!--
						class WPSE_130877_Custom_Walker extends Walker_Page {

						function start_el( &$output, $page, $depth, $args, $current_page = 0 ) {
							if ( $depth )
								$indent = str_repeat("\t", $depth);
							else
								$indent = '';
							extract($args, EXTR_SKIP);
							$css_class = array('page_item', 'page-item-'.$page->ID);
							if ( !empty($current_page) ) {
								$_current_page = get_post( $current_page );
								if ( in_array( $page->ID, $_current_page->ancestors ) )
									$css_class[] = 'current_page_ancestor';
								if ( $page->ID == $current_page )
									$css_class[] = 'current_page_item';
								elseif ( $_current_page && $page->ID == $_current_page->post_parent )
									$css_class[] = 'current_page_parent';
							}
							elseif ( $page->ID == get_option('page_for_posts') ) {
								$css_class[] = 'current_page_parent';
							}

							$css_class = implode(' ', apply_filters('page_css_class', $css_class, $page, $depth, $args, $current_page ) );
							$icon_class = get_post_meta($page->ID, 'icon_class', true); //Retrieve stored icon class from post meta

							$output .= $indent . '<li class="' . $css_class . '">';
							$output .= '<a href="' . get_permalink($page->ID) . '">' . $link_before;

							if($icon_class){ //Test if $icon_class exists
								$output .= '<span class="' . $icon_class . '"></span>'; //If it exists output a span with the $icon_class attached to it
							}
							//custom meta box
							$output .= get_post_meta( $page->ID, 'sidebar_title', true );
							//custom meta box
							$output .= $link_after . '</a>';

							if ( !empty($show_date) ) {
								if ('modified' == $show_date )
									$time = $page->post_modified;
								else
									$time = $page->post_date;
								$output .= " " . mysql2date($date_format, $time);
							}
						}
					}

					// use
					wp_list_pages(array(
						'post_type' => 'practice-areas',
						'title_li'    => '',
						'echo'        => 1,
						'walker' => new WPSE_130877_Custom_Walker()
					));
					--></code>
				</pre>
			</section>
			<section class="mb-3 section18">
				<h2>WooCommerce</h2>
				<pre class="line-numbers pre-height">
					<code class="language-php">
						/*
						|--------------------------------------------------------------------------
						| https://businessbloomer.com/woocommerce-easily-get-product-info-title-sku-desc-product-object/
						| 1. You have access to $product
						|--------------------------------------------------------------------------
						*/

						// Get Product ID
						$product->get_id(); (fixes the error: "Notice: id was called incorrectly. Product properties should not be accessed directly")

						// Get Product General Info
						$product->get_type();
						$product->get_name();
						$product->get_slug();
						$product->get_date_created();
						$product->get_date_modified();
						$product->get_status();
						$product->get_featured();
						$product->get_catalog_visibility();
						$product->get_description();
						$product->get_short_description();
						$product->get_sku();
						$product->get_menu_order();
						$product->get_virtual();
						get_permalink( $product->get_id() );

						// Get Product Prices
						$product->get_price();
						$product->get_regular_price();
						$product->get_sale_price();
						$product->get_date_on_sale_from();
						$product->get_date_on_sale_to();
						$product->get_total_sales();

						// Get Product Tax, Shipping & Stock
						$product->get_tax_status();
						$product->get_tax_class();
						$product->get_manage_stock();
						$product->get_stock_quantity();
						$product->get_stock_status();
						$product->get_backorders();
						$product->get_sold_individually();
						$product->get_purchase_note();
						$product->get_shipping_class_id();

						// Get Product Dimensions
						$product->get_weight();
						$product->get_length();
						$product->get_width();
						$product->get_height();
						$product->get_dimensions();

						// Get Linked Products
						$product->get_upsell_ids();
						$product->get_cross_sell_ids();
						$product->get_parent_id();

						// Get Product Variations
						$product->get_attributes();
						$product->get_default_attributes();

						// Get Product Taxonomies
						$product->get_categories();
						$product->get_category_ids();
						$product->get_tag_ids();

						// Get Product Downloads
						$product->get_downloads();
						$product->get_download_expiry();
						$product->get_downloadable();
						$product->get_download_limit();

						// Get Product Images
						$product->get_image_id();
						$product->get_image();
						$product->get_gallery_image_ids();

						// Get Product Reviews
						$product->get_reviews_allowed();
						$product->get_rating_counts();
						$product->get_average_rating();
						$product->get_review_count();

						/*
						|--------------------------------------------------------------------------
						| 2. You have access to $product_id
						|--------------------------------------------------------------------------
						*/

						// Get $product object from product ID
						$product = wc_get_product( $product_id );

						// Now you have access to (see above)...
						$product->get_type();
						$product->get_name();

						/*
						|--------------------------------------------------------------------------
						| 3. You have access to the Order object or Order ID
						|--------------------------------------------------------------------------
						*/

						// Get $product object from $order / $order_id
						$order = new WC_Order( $order_id );
						$items = $order->get_items();

						foreach ( $items as $item ) {
							$product = wc_get_product( $item['product_id'] );

							// Now you have access to (see above)...
							$product->get_type();
							$product->get_name();
						}

						/*
						|--------------------------------------------------------------------------
						| 4. You have access to the Cart object
						|--------------------------------------------------------------------------
						*/

						// Get $product object from Cart object
						$cart = WC()->cart->get_cart();
						foreach( $cart as $cart_item ){
							$product = wc_get_product( $cart_item['product_id'] );

							// Now you have access to (see above)...
							$product->get_type();
							$product->get_name();
						}
					</code>
				</pre>
			</section>
			<!--<section class="mb-3 section19">
				<h2>xxx</h2>
				<pre class="line-numbers pre-height">
					<code class="language-markup">&lt;!&ndash;

					&ndash;&gt;</code>
				</pre>
			</section>-->
		</main>

	</div>
</div>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.scrollify.js"></script>
<script src="assets/js/prism.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>