<?php
/**
 * Defines the `ucf_map_point` custom post type
 */
if ( ! class_exists( 'UCF_Map_Point_Post_Type' ) ) {
	class UCF_Map_Point_Post_Type {
		public static
			$text_domain = UCF_MAP_POINT__TEXT_DOMAIN;

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
				'name'                  => _x( 'Map Points', 'Post Type General Name', self::$text_domain ),
				'singular_name'         => _x( 'Map Point', 'Post Type Singular Name', self::$text_domain ),
				'menu_name'             => __( 'Map Points', self::$text_domain ),
				'name_admin_bar'        => __( 'Map Point', self::$text_domain ),
				'archives'              => __( 'Map Point Archives', self::$text_domain ),
				'parent_item_colon'     => __( 'Parent Map Point:', self::$text_domain ),
				'all_items'             => __( 'All Map Points', self::$text_domain ),
				'add_new_item'          => __( 'Add New Map Point', self::$text_domain ),
				'add_new'               => __( 'Add New', self::$text_domain ),
				'new_item'              => __( 'New Map Point', self::$text_domain ),
				'edit_item'             => __( 'Edit Map Point', self::$text_domain ),
				'update_item'           => __( 'Update Map Point', self::$text_domain ),
				'view_item'             => __( 'View Map Point', self::$text_domain ),
				'search_items'          => __( 'Search Map Points', self::$text_domain ),
				'not_found'             => __( 'Not found', self::$text_domain ),
				'not_found_in_trash'    => __( 'Not found in Trash', self::$text_domain ),
				'featured_image'        => __( 'Featured Image', self::$text_domain ),
				'set_featured_image'    => __( 'Set featured image', self::$text_domain ),
				'remove_featured_image' => __( 'Remove featured image', self::$text_domain ),
				'use_featured_image'    => __( 'Use as featured image', self::$text_domain ),
				'insert_into_item'      => __( 'Insert into Map Point', self::$text_domain ),
				'uploaded_to_this_item' => __( 'Uploaded to this Map Point', self::$text_domain ),
				'items_list'            => __( 'Map Points list', self::$text_domain ),
				'items_list_navigation' => __( 'Map Points list navigation', self::$text_domain ),
				'filter_items_list'     => __( 'Filter Map Points list', self::$text_domain ),
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
				'label'                 => __( 'Map Point', self::$text_domain ),
				'description'           => __( 'Map Points', self::$text_domain ),
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
			$args = apply_filters( 'ucf_map_point_post_type_args', $args, self::$text_domain );

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
