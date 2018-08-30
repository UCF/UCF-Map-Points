<?php
/**
 * Defines a map point type. This allows for
 * the organization of different kinds of map points
 */
if ( ! class_exists( 'UCF_Map_Point_Type_Taxonomy' ) ) {
	class UCF_Map_Point_Type_Taxonomy {
		public static
			$text_domain = UCF_MAP_POINT__TEXT_DOMAIN;

		/**
		 * Registers the `ucf_map_point_type` taxonomy
		 *
		 * @since 1.0.0
		 */
		public static function register_taxonomy() {
			register_taxonomy( 'ucf_map_point_type', array( 'ucf_map_point' ), self::args() );
		}

		/**
		 * Returns the labels array that is used when
		 * registering the `ucf_map_point_type` taxonomy
		 * after passing it through the
		 * `ucf_map_point_type_labels` filter.
		 *
		 * @since 1.0.0
		 * @return array The labels array
		 */
		public static function labels() {
			$labels = array(
				'name'                       => _x( 'Map Point Types', 'Taxonomy General Name', self::$text_domain ),
				'singular_name'              => _x( 'Map Point Type', 'Taxonomy Singular Name', self::$text_domain ),
				'menu_name'                  => __( 'Map Point Types', self::$text_domain ),
				'all_items'                  => __( 'All Map Point Types', self::$text_domain ),
				'parent_item'                => __( 'Parent Map Point Type', self::$text_domain ),
				'parent_item_colon'          => __( 'Parent Map Point Type:', self::$text_domain ),
				'new_item_name'              => __( 'New Map Point Type Name', self::$text_domain ),
				'add_new_item'               => __( 'Add New Map Point Type', self::$text_domain ),
				'edit_item'                  => __( 'Edit Map Point Type', self::$text_domain ),
				'update_item'                => __( 'Update Map Point Type', self::$text_domain ),
				'view_item'                  => __( 'View Map Point Type', self::$text_domain ),
				'separate_items_with_commas' => __( 'Separate Map Point Types with commas', self::$text_domain ),
				'add_or_remove_items'        => __( 'Add or remove Map Point Types', self::$text_domain ),
				'choose_from_most_used'      => __( 'Choose from the most used', self::$text_domain ),
				'popular_items'              => __( 'Popular Map Point Types', self::$text_domain ),
				'search_items'               => __( 'Search Map Point Types', self::$text_domain ),
				'not_found'                  => __( 'Not Found', self::$text_domain ),
				'no_terms'                   => __( 'No Map Point Types', self::$text_domain ),
				'items_list'                 => __( 'Map Point Types list', self::$text_domain ),
				'items_list_navigation'      => __( 'Map Point Types list navigation', self::$text_domain ),
			);

			$labels = apply_filters( 'ucf_map_point_type_labels', $labels, self::$text_domain );

			return $labels;
		}

		/**
		 * Returns the argument array that is used when
		 * registering the `ucf_map_point_type` taxonomy
		 * after passing it rhoguh the
		 * `ucf_map_point_type_args` filter.
		 *
		 * @since 1.0.0
		 * @return array The args array
		 */
		public static function args() {
			return array(
				'labels'                     => self::labels(),
				'hierarchical'               => true,
				'public'                     => true,
				'show_ui'                    => true,
				'show_admin_column'          => true,
				'show_in_nav_menus'          => true,
				'show_tagcloud'              => true,
			);
		}
	}
}
