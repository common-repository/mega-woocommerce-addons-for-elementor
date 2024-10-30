<?php
	namespace Elementor;

	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	class Widget_mwafe_addon_product_horizontal extends Widget_Base {

		public function get_name() {
			return 'product-horizontal';
		}

		public function get_title() {
			return __( 'Products Horizontal', 'woocommerce-addons-elementor' );
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
					'label' => __( 'Products Horizontal', 'woocommerce-addons-elementor' ),
				]
			);

			$this->add_control(
			  'mwae_product_horizontal_products_count',
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
				'mwae_product_horizontal_sorting_option',
				[
					'label' => esc_html__( 'Sort Products by', 'woocommerce-addons-elementor' ),
					'type' => Controls_Manager::SELECT,
					'default' => 1,
					'options' => [
						1 => esc_html__( 'Best Selling', 'woocommerce-addons-elementor' ),
						2 => esc_html__( 'Highest Price', 'woocommerce-addons-elementor' ),
						3 => esc_html__( 'Lowest Price', 'woocommerce-addons-elementor' ),
						4 => esc_html__( 'On Sale', 'woocommerce-addons-elementor' ),
						5 => esc_html__( 'Alphabetical', 'woocommerce-addons-elementor' ),
					],
				]
			);

			$this->end_controls_section();


        $this->start_controls_section(
			'mwae_section_product_horizontal_grid_layout',
			[
				'label' => __( 'Layout Settings', 'woocommerce-addons-elementor' )
			]
		);


		$this->add_control(
			'mwae_product_horizontal_grid_column',
			[
				'label' => esc_html__( 'Columns', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'boot-col-md-6',
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
            'mwae_show_product_horizontal_title',
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
            'mwae_show_product_horizontal_desc',
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
            'mwae_show_product_horizontal_price',
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
            'mwae_show_product_horizontal_rating',
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
            'mwae_show_product_horizontal_button',
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
			'wae_section_pro',
			[
				'label' => __( 'Go Premium for More Features', 'woocommerce-addons-elementor' )
			]
		);

        $this->add_control(
            'wae_control_get_pro',
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
            'eael_section_post_grid_style',
            [
                'label' => __( 'Product Grid Style', 'woocommerce-addons-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );


		$this->add_control(
            'mwae_product_horizontal_align',
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
				'default' => 'text-left'
            ]
        );


		$this->add_responsive_control(
			'mwae_product_simple_spacing',
			[
				'label' => esc_html__( 'Spacing Between Items', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .product-horizontal' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
			'mwae_product_simple_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .product-horizontal' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
				],
			]
		);

		$this->end_controls_section();


        $this->start_controls_section(
            'mwea_section_typography_product_simple',
            [
                'label' => __( 'Color & Typography', 'woocommerce-addons-elementor' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );


        $this->add_control(
			'mwea_product_horizontal_bg_color',
			[
				'label' => __( 'Product Box Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .product-horizontal-inner' => 'background-color: {{VALUE}}',
				]

			]
		);


        $this->add_control(
			'mwea_product_horizontal_title_color',
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
			'mwea_product_simple_horizontal_hover_color',
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
			'mwea_product_horizontal_desc_color',
			[
				'label' => __( 'Description Color', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::COLOR,
				'default'=> '#303133',
				'selectors' => [
					'{{WRAPPER}} .wae-product-horizontal-text' => 'color: {{VALUE}};',
				]

			]
		);


        $this->add_control(
			'mwea_product_horizontal_price_color',
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
			'mwea_product_horizontal_rating_color',
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
			'mwea_product_horizontal_button_color',
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
			'mwea_product_horizontal_button_text_color',
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
				'name' => 'mwea_product_horizontal_typography_title',
				'label' => __( 'Product Title Typography', 'woocommerce-addons-elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .entry-title',
			]
		);


		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'mwea_product_horizontal_typography_info',
				'label' => __( 'Other Text Typography', 'woocommerce-addons-elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wae-product-horizontal-text',
			]
		);




		$this->end_controls_tabs();
		$this->end_controls_section();


		}

		protected function render() {
			$settings = $this->get_settings();

			$no_product = $this->get_settings( 'mwae_product_horizontal_products_count' );
			$product_sort = $this->get_settings( 'mwae_product_horizontal_sorting_option' );
			$column = $this->get_settings( 'mwae_product_horizontal_grid_column' );
			$align = $this->get_settings('mwae_product_horizontal_align');

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
		<div class="wae-products-horizontal">
		<div class="boot-row">
			<?php while ( $products_query->have_posts() ) : $products_query->the_post(); ?>

				<div class="product-horizontal <?php echo $column;?>">
				<div class="product-horizontal-inner">
				<div class="boot-row">

					<div class="boot-col-md-6">
						<div class="wae-product-horizontal-text <?php echo $align;?>">

							<?php if( $settings['mwae_show_product_horizontal_title'] == 1 ):?>
								<h3 class="entry-title heading-three">
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
								</h3>
							<?php endif;?>

							<?php if( $settings['mwae_show_product_horizontal_price'] == 1 ):?>
								<div class="wae-product-horizontal-price-info">
									<span class="wae-product-price"><?php woocommerce_template_single_price();?></span>
								</div>
							<?php endif;?>

							<?php if( $settings['mwae_show_product_horizontal_desc'] == 1 ):?>
									<?php the_excerpt();?>
							<?php endif;?>

							<?php if( $settings['mwae_show_product_horizontal_rating'] == 1 ):?>
							<?php woocommerce_template_loop_rating();?>
							<?php endif;?>

							<?php if( $settings['mwae_show_product_horizontal_button'] == 1 ):?>
								<div class="wae-product-button">
									<?php woocommerce_template_loop_add_to_cart();?>
								</div>
							<?php endif;?>
						</div>
					</div>

					<div class="boot-col-md-6">
						<div class="wae-product-horizontal-image">
							<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), $settings['image_size'])?>">
						</div>
					</div>

				</div>
				</div>
				</div>

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
		$widgets_manager->register_widget_type( new Widget_mwafe_addon_product_horizontal() );
	} );