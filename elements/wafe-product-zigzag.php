<?php
	namespace Elementor;

	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	class Widget_mwafe_addon_product_zigzag extends Widget_Base {

		public function get_name() {
			return 'product-zigzag';
		}

		public function get_title() {
			return __( 'Products Zig Zag', 'woocommerce-addons-elementor' );
		}

		public function get_icon() {
			return 'eicon-woocommerce';
		}

		public function get_categories() {
			return [ 'woocommerce-addons-elementor' ];
		}

		protected function _register_controls() {
			$this->start_controls_section(
				'section_button',
				[
					'label' => __( 'Products Zig Zag', 'woocommerce-addons-elementor' ),
				]
			);

			$this->add_control(
			  'mwae_product_zigzag_products_count',
			  [
			     'label'   => __( 'Products Count', 'woocommerce-addons-elementor' ),
			     'type'    => Controls_Manager::NUMBER,
			     'default' => 4,
			     'min'     => 1,
			     'max'     => 1000,
			     'step'    => 1,
			  ]
			);


			$this->add_control(
				'mwae_product_zigzag_sorting_option',
				[
					'label' => esc_html__( 'Sort Products by', 'woocommerce-addons-elementor' ),
					'type' => Controls_Manager::SELECT,
					'default' => 1,
					'options' => [
						1 => esc_html__( 'Best Selling', 'woocommerce-addons-elementor' ),
						2 => esc_html__( 'Highest Price', 'woocommerce-addons-elementor' ),
						3 => esc_html__( 'Lowest Price', 'woocommerce-addons-elementor' ),
						4 => esc_html__( 'On Sale', 'woocommerce-addons-elementor' ),
					],
				]
			);

			$this->end_controls_section();


        $this->start_controls_section(
			'mwae_section_product_zigzag_grid_layout',
			[
				'label' => __( 'Layout Settings', 'woocommerce-addons-elementor' )
			]
		);


		$this->add_control(
			'mwae_product_zigzag_grid_column',
			[
				'label' => esc_html__( 'Columns', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'boot-col-md-12',
				'options' => [
					'boot-col-md-12' => esc_html__( '1', 'woocommerce-addons-elementor' ),
					'boot-col-md-6' 	=> esc_html__( '2', 'woocommerce-addons-elementor' ),
					'boot-col-md-4' 	=> esc_html__( '3', 'woocommerce-addons-elementor' ),
					'boot-col-md-3' 	=> esc_html__( '4', 'woocommerce-addons-elementor' ),
					'boot-col-md-2' 	=> esc_html__( '6', 'woocommerce-addons-elementor' ),
				],
			]
		);



        $this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name' => 'image',
				'exclude' => [ 'custom' ],
				'default' => 'medium',

			]
		);


		$this->add_control(
            'mwae_show_product_zigzag_title',
            [
                'label' => __( 'Show Title', 'woocommerce-addons-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
					1 => [
						'title' => __( 'Yes', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-check',
					],
					0 => [
						'title' => __( 'No', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-ban',
					]
				],
				'default' => '1'
            ]
        );


		$this->add_control(
            'mwae_show_product_zigzag_description',
            [
                'label' => __( 'Show Description', 'woocommerce-addons-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
					'1' => [
						'title' => __( 'Yes', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-check',
					],
					'0' => [
						'title' => __( 'No', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-ban',
					]
				],
				'default' => '1'
            ]
        );


		$this->add_control(
            'mwae_show_product_zigzag_price',
            [
                'label' => __( 'Show Price', 'woocommerce-addons-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
					1 => [
						'title' => __( 'Yes', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-check',
					],
					0 => [
						'title' => __( 'No', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-ban',
					]
				],
				'default' => '1'
            ]
        );

		$this->add_control(
            'mwae_show_product_zigzag_rating',
            [
                'label' => __( 'Show Rating', 'woocommerce-addons-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
					1 => [
						'title' => __( 'Yes', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-check',
					],
					0 => [
						'title' => __( 'No', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-ban',
					]
				],
				'default' => '1'
            ]
        );


		$this->add_control(
            'mwae_show_product_zigzag_button',
            [
                'label' => __( 'Show Add to Cart', 'woocommerce-addons-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
					'1' => [
						'title' => __( 'Yes', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-check',
					],
					'0' => [
						'title' => __( 'No', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-ban',
					]
				],
				'default' => '1'
            ]
        );




		$this->end_controls_section();

        $this->start_controls_section(
			'mwae_section_pro',
			[
				'label' => __( 'Go Premium for More Features', 'woocommerce-addons-elementor' )
			]
		);

        $this->add_control(
            'mwae_control_get_pro',
            [
                'label' => __( 'Unlock more possibilities', 'woocommerce-addons-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
					'1' => [
						'title' => __( '', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-unlock-alt',
					],
				],
				'default' => '1',
                'description' => '<span class="pro-feature"> Get the  <a href="https://atlantisthemes.com/elementor-addons-woocommerce/" target="_blank">Pro version</a> for more stunning elements and customization options.</span>'
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'mwea_section_product_zigzag_style',
            [
                'label' => __( 'Product Style', 'woocommerce-addons-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );


		$this->add_control(
            'mwae_product_zigzag_align',
            [
                'label' => __( 'Text Alignment', 'woocommerce-addons-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
					'text-left' => [
						'title' => __( 'Left', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'text-center' => [
						'title' => __( 'Center', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'text-right' => [
						'title' => __( 'Right', 'woocommerce-addons-elementor' ),
						'icon' => 'fa fa-align-right',
					]
				],
				'default' => 'text-center'
            ]
        );


		$this->add_responsive_control(
			'mwae_product_zigzag_spacing',
			[
				'label' => esc_html__( 'Spacing Between Items', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .zigzag-even, {{WRAPPER}} .zigzag-odd' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'mwae_product_zigzag_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .zigzag-even, {{WRAPPER}} .zigzag-odd' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
				],
			]
		);


		$this->end_controls_section();

        $this->start_controls_section(
            'mwea_section_typography_product_zigzag',
            [
                'label' => __( 'Color & Typography', 'woocommerce-addons-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );


        $this->add_control(
			'mwea_product_zigzag_bg_color',
			[
				'label' => __( 'Product Box Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .zigzag-even, {{WRAPPER}} .zigzag-odd' => 'background-color: {{VALUE}}',
				]

			]
		);

        $this->add_control(
			'mwea_product_zigzag_title_color',
			[
				'label' => __( 'Title Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#303133',
				'selectors' => [
					'{{WRAPPER}} .entry-title, {{WRAPPER}} .entry-title a' => 'color: {{VALUE}};',
				]

			]
		);

        $this->add_control(
			'mwea_product_zigzag_title_hover_color',
			[
				'label' => __( 'Title Hover Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#23527c',
				'selectors' => [
					'{{WRAPPER}} .entry-title:hover, {{WRAPPER}} .entry-title a:hover' => 'color: {{VALUE}};',
				]

			]
		);


        $this->add_control(
			'mwea_product_zigzag_desc_color',
			[
				'label' => __( 'Description Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#303133',
				'selectors' => [
					'{{WRAPPER}} .zigzag-text' => 'color: {{VALUE}};',
				]

			]
		);


        $this->add_control(
			'mwea_product_zigzag_price_color',
			[
				'label' => __( 'Price Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#303133',
				'selectors' => [
					'{{WRAPPER}} .woocommerce-Price-amount' => 'color: {{VALUE}};',
				]

			]
		);

        $this->add_control(
			'mwea_product_zigzag_rating_color',
			[
				'label' => __( 'Rating Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#303133',
				'selectors' => [
					'{{WRAPPER}} .star-rating span:before' => 'color: {{VALUE}};',
				]

			]
		);


        $this->add_control(
			'mwea_product_zigzag_button_color',
			[
				'label' => __( 'Button Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#303133',
				'selectors' => [
					'{{WRAPPER}} .add_to_cart_button, {{WRAPPER}} .product_type_variable' => 'background-color: {{VALUE}};',
				]

			]
		);


        $this->add_control(
			'mwea_product_zigzag_button_text_color',
			[
				'label' => __( 'Button Text Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#303133',
				'selectors' => [
					'{{WRAPPER}} .add_to_cart_button, {{WRAPPER}} .product_type_variable' => 'color: {{VALUE}};',
				]

			]
		);



		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'mwea_product_zigzag_typography_title',
				'label' => __( 'Product Title Typography', 'woocommerce-addons-elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .entry-title',
			]
		);


		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'mwea_product_zigzag_typography_info',
				'label' => __( 'Info Typography', 'woocommerce-addons-elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .zigzag-text',
			]
		);


		$this->end_controls_tabs();
		$this->end_controls_section();






		}

		protected function render() {
			$settings = $this->get_settings();

			$no_product = $this->get_settings( 'mwae_product_zigzag_products_count' );
			$product_sort = $this->get_settings( 'mwae_product_zigzag_sorting_option' );
			$column = $this->get_settings( 'mwae_product_zigzag_grid_column' );
			$align = $this->get_settings('mwae_product_zigzag_align');

			if ( $product_sort == 1 ){
				// Best Selling
				$args = array(
					'post_type' 			=> 'product',
					'post_status' 			=> 'publish',
					'ignore_sticky_posts' 	=> 1,
					'posts_per_page' 		=> $no_product,
					'no_found_rows' 		=> true,
				    'meta_key' 				=> 'total_sales',
				    'orderby' 				=> 'meta_value_num',
				    'order' 				=> 'DESC',
				);
			}elseif( $product_sort == 2 ){
				// Highest Price
				$args = array(
					'post_type' 			=> 'product',
					'post_status' 			=> 'publish',
					'ignore_sticky_posts' 	=> 1,
					'posts_per_page' 		=> $no_product,
					'no_found_rows' 		=> true,
				    'meta_key' 				=> '_regular_price',
				    'orderby' 				=> 'meta_value_num',
				    'order' 				=> 'DESC',
				);
			}elseif( $product_sort == 3 ){
				// Lowest Price
				$args = array(
					'post_type' 			=> 'product',
					'post_status' 			=> 'publish',
					'ignore_sticky_posts' 	=> 1,
					'posts_per_page' 		=> $no_product,
					'no_found_rows' 		=> true,
				    'meta_key' 				=> '_regular_price',
				    'orderby' 				=> 'meta_value_num',
				    'order' 				=> 'ASC',
				);
			}else{
				// On Sale
				$args = array(
					'post_type' 			=> 'product',
					'post_status' 			=> 'publish',
					'ignore_sticky_posts' 	=> 1,
					'posts_per_page' 		=> $no_product,
					'no_found_rows' 		=> true,
				    'meta_key' 				=> '_sale_price',
				    'orderby' 				=> 'meta_value_num',
				    'order' 				=> 'DESC',
				);
			}

		$products_query = new \WP_Query( $args );
		?>
		<?php if ( $products_query->have_posts() ) : ?>
		<div class="wae-products-zigzag container">
		<div class="boot-row">
			<?php while ( $products_query->have_posts() ) : $products_query->the_post(); ?>

			    <?php if ($products_query->current_post % 2 == 0): ?>
			    	<div class="wae-products-zigzag-even <?php echo $column;?>">
			        <div class="boot-row zigzag-even">
			        	<div class="boot-col-6 zigzag-image">
							<div class="opener-image-wide">
								<a href="<?php the_permalink();?>">
								<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), $settings['image_size'])?>">
								</a>
							</div>
			        	</div>
			        	<div class="boot-col-6 zigzag-text">
			        		<div class="featured-product-info">

			        			<?php if( $settings['mwae_show_product_zigzag_title'] == 1 ):?>
									<a href="<?php the_permalink();?>">
										<h3 class="entry-title"><?php the_title();?></h3>
									</a>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_rating'] == 1 ):?>
									<?php woocommerce_template_loop_rating();?>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_description'] == 1 ):?>
									<div class="abstract"><?php woocommerce_template_single_excerpt();?></div>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_price'] == 1 ):?>
									<div class="product-price"><?php woocommerce_template_single_price(); ?></div>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_button'] == 1 ):?>
									<div class="add-to-cart"><?php woocommerce_template_loop_add_to_cart();?></div>
								<?php endif;?>

							</div>
			        	</div>
			        </div>
			        </div>
			    <?php else: ?>
			    	<div class="wae-products-zigzag-odd <?php echo $column;?>">
			        <div class="boot-row zigzag-odd">
			        	<div class="boot-col-6 zigzag-text">
			        		<div class="featured-product-info">

			        			<?php if( $settings['mwae_show_product_zigzag_title'] == 1 ):?>
									<a href="<?php the_permalink();?>">
										<h3 class="entry-title"><?php the_title();?></h3>
									</a>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_rating'] == 1 ):?>
									<?php woocommerce_template_loop_rating();?>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_description'] == 1 ):?>
									<div class="abstract"><?php woocommerce_template_single_excerpt();?></div>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_price'] == 1 ):?>
									<div class="product-price"><?php woocommerce_template_single_price(); ?></div>
								<?php endif;?>

								<?php if( $settings['mwae_show_product_zigzag_button'] == 1 ):?>
									<div class="add-to-cart"><?php woocommerce_template_loop_add_to_cart();?></div>
								<?php endif;?>
							</div>
			        	</div>

			        	<div class="boot-col-6 zigzag-image">
							<div class="opener-image-wide">
								<a href="<?php the_permalink();?>">
								<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), $settings['image_size'])?>">
								</a>
							</div>
			        	</div>
			        </div>
			        </div>
			    <?php endif ?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		</div>
		<?php endif; ?>


			<?php
		}

		protected function _content_template() {}
	}

	add_action( 'elementor/widgets/widgets_registered', function ( $widgets_manager ) {
		$widgets_manager->register_widget_type( new Widget_mwafe_addon_product_zigzag() );
	} );