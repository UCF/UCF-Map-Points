<?php
/**
 * Defines the `ucf_map_point` custom post type
 */
if ( ! class_exists( 'UCF_Map_Point_Post_Type' ) ) {
	class UCF_Map_Point_Post_Type {
		public static
			$post_type_slug = 'ucf_map_point';

		/**
		 * Registers the `ucf_map_point` custom post type.
		 * @since 1.0.0
		 */
		public static function register_post_type() {
			register_post_type( 'ucf_map_point', self::args() );
		}

		/**
		 * Returns the labels array after defining defaults
		 * and passing it through the `ucf_map_point_labels` filter.
		 *
		 * @since 1.0.0
		 * @return array The labels array
		 */
		public static function labels() {
			$labels = array(
				'name'                  => _x( 'Map Points', 'Post Type General Name', self::$post_type_slug ),
				'singular_name'         => _x( 'Map Point', 'Post Type Singular Name', self::$post_type_slug ),
				'menu_name'             => __( 'Map Points', self::$post_type_slug ),
				'name_admin_bar'        => __( 'Map Point', self::$post_type_slug ),
				'archives'              => __( 'Map Point Archives', self::$post_type_slug ),
				'parent_item_colon'     => __( 'Parent Map Point:', self::$post_type_slug ),
				'all_items'             => __( 'All Map Points', self::$post_type_slug ),
				'add_new_item'          => __( 'Add New Map Point', self::$post_type_slug ),
				'add_new'               => __( 'Add New', self::$post_type_slug ),
				'new_item'              => __( 'New Map Point', self::$post_type_slug ),
				'edit_item'             => __( 'Edit Map Point', self::$post_type_slug ),
				'update_item'           => __( 'Update Map Point', self::$post_type_slug ),
				'view_item'             => __( 'View Map Point', self::$post_type_slug ),
				'search_items'          => __( 'Search Map Points', self::$post_type_slug ),
				'not_found'             => __( 'Not found', self::$post_type_slug ),
				'not_found_in_trash'    => __( 'Not found in Trash', self::$post_type_slug ),
				'featured_image'        => __( 'Featured Image', self::$post_type_slug ),
				'set_featured_image'    => __( 'Set featured image', self::$post_type_slug ),
				'remove_featured_image' => __( 'Remove featured image', self::$post_type_slug ),
				'use_featured_image'    => __( 'Use as featured image', self::$post_type_slug ),
				'insert_into_item'      => __( 'Insert into Map Point', self::$post_type_slug ),
				'uploaded_to_this_item' => __( 'Uploaded to this Map Point', self::$post_type_slug ),
				'items_list'            => __( 'Map Points list', self::$post_type_slug ),
				'items_list_navigation' => __( 'Map Points list navigation', self::$post_type_slug ),
				'filter_items_list'     => __( 'Filter Map Points list', self::$post_type_slug ),
			);

			// Pass $labels through filter so they can be adjusted by themes.
			$labels = apply_filters( 'ucf_map_point_labels', $labels );

			return $labels;
		}

		/**
		 * Returns the argument array after setting defaults
		 * and passing it through the `ucf_map_point_args` filter.
		 *
		 * @since 1.0.0
		 * @return array The argument array for registering the post type.
		 */
		public static function args() {
			$args = array(
				'label'                 => __( 'Map Point', self::$post_type_slug ),
				'description'           => __( 'Map Points', self::$post_type_slug ),
				'labels'                => self::labels(),
				'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
				'taxonomies'            => self::taxonomies(),
				'hierarchical'          => true,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'             => 'dashicons-welcome-learn-more',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'post',
			);

			// Pass $args through filter so they can be adjusted by themes.
			$args = apply_filters( 'ucf_map_point_post_type_args', $args );

			return $args;
		}

		/**
		 * Returns the taxonomy array after defining defaults
		 * and passing it through the `ucf_map_point_taoxnomies` filter.
		 *
		 * @since 1.0.0
		 * @return array The taxonomies array.
		 */
		public static function taxonomies() {
			$retval = array();

			$valid_taxonomies = array(

			);

			$valid_taxonomies = apply_filters( 'ucf_map_point_taxonomies', $valid_taxonomies );

			foreach( $valid_taxonomies as $taxonomy ) {
				if ( taxonomy_exists( $taxonomy ) ) {
					$retval[] = $taxonomy;
				}
			}

			return $retval;
		}
	}
}
