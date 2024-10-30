<?php
	namespace Elementor;

	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	class Widget_mwafe_addon_product_category extends Widget_Base {

		public function get_name() {
			return 'product-category';
		}

		public function get_title() {
			return __( 'Products Categories', 'woocommerce-addons-elementor' );
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
					'label' => __( 'Products Categories', 'woocommerce-addons-elementor' ),
				]
			);


			$this->add_control(
				'wae_product_category_sorting_option',
				[
					'label' => esc_html__( 'Sort Categories by', 'woocommerce-addons-elementor' ),
					'type' => Controls_Manager::SELECT,
					'default' => 1,
					'options' => [
						1 => esc_html__( 'Alphabetical', 'woocommerce-addons-elementor' ),
						2 => esc_html__( 'Category with most products first', 'woocommerce-addons-elementor' ),
					],
				]
			);

			$this->end_controls_section();


        $this->start_controls_section(
			'wae_section_post_hor_layout',
			[
				'label' => __( 'Layout Settings', 'woocommerce-addons-elementor' )
			]
		);


		$this->add_control(
			'wae_product_category_column',
			[
				'label' => esc_html__( 'Columns', 'woocommerce-addons-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'boot-col-md-4',
				'options' => [
					'boot-col-md-12' => esc_html__( '1', 'woocommerce-addons-elementor' ),
					'boot-col-md-6' 	=> esc_html__( '2', 'woocommerce-addons-elementor' ),
					'boot-col-md-4' 	=> esc_html__( '3', 'woocommerce-addons-elementor' ),
					'boot-col-md-3' 	=> esc_html__( '4', 'woocommerce-addons-elementor' ),
					'boot-col-md-2' 	=> esc_html__( '6', 'woocommerce-addons-elementor' ),
				],
			]
		);


		$this->add_control(
            'wae_product_category_info_align',
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
				'default' => '1'
            ]
        );


		$this->add_control(
            'wae_show_product_category_title',
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
            'wae_show_product_category_description',
            [
                'label' => __( 'Show Category Description', 'woocommerce-addons-elementor' ),
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
            'wae_show_product_category_count',
            [
                'label' => __( 'Show Product Count', 'woocommerce-addons-elementor' ),
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



		}

		protected function render() {
			$settings = $this->get_settings();

			$product_sort 	= $this->get_settings( 'wae_product_category_sorting_option' );
			$column 		= $this->get_settings( 'wae_product_category_column' );
			$align 			= $this->get_settings( 'wae_product_category_info_align');

			if ( $product_sort == 1 ){
				$prod_categories = array(
						'taxonomy'		=> 'product_cat',
					    'orderby'		=> 'title',
					    'order' 		=> 'ASC',
					    'hide_empty' 	=> true,
						'fields'        => 'all',
						'pad_counts'    => false,
				);
			}else{
				$prod_categories = array(
						'taxonomy'		=> 'product_cat',
					    'orderby'		=> 'count',
					    'order' 		=> 'DESC',
					    'hide_empty' 	=> true,
						'fields'        => 'all',
						'pad_counts'    => false,
				);
			}

			$prod_categories_query = new \WP_Term_Query( $prod_categories );
		?>
		<div class="container">
		<div class="boot-row">
		<?php
		foreach( $prod_categories_query->terms as $prod_cat ) :
		    if ( $prod_cat->parent != 0 )
		        continue;
		    $cat_thumb_id 	= get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
		    $cat_thumb_url 	= wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
		    $term_link 		= get_term_link( $prod_cat, 'product_cat' );
		?>
			<div class="wae-product-category-card <?php echo $column;?> boot-col-6">
			<div class="wae-product-category-card-inner <?php echo $align;?>">
			<a href="<?php echo $term_link;?>">
			    <img src="<?php echo $cat_thumb_url[0]; ?>" class="img-responsive" alt="<?php echo $prod_cat->name; ?>"/>
			    <?php if( $settings['wae_show_product_category_title'] == 1 ) : ?>
			    <h3 class="entry-title category_title">
			    	<?php echo $prod_cat->name;?>
			    </h3>
			    <?php endif;?>
			</a>
			<?php if( $settings['wae_show_product_category_count'] == 1 ):?>
				<span class="category-count">(<?php echo esc_attr($prod_cat->count);?>)</span>
			<?php endif;?>

			<?php if( $settings['wae_show_product_category_description'] == 1 ):?>
				<div class="category-description"><?php echo esc_attr($prod_cat->description);?></div>
			<?php endif;?>
			</div>
			</div>

			<?php
			endforeach;
			wp_reset_query();?>
</div>
</div>
			<?php
		}

		protected function _content_template() {}
	}

	add_action( 'elementor/widgets/widgets_registered', function ( $widgets_manager ) {
		$widgets_manager->register_widget_type( new Widget_mwafe_addon_product_category() );
	} );