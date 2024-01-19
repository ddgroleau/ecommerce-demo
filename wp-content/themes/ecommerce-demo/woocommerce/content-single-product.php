<?php

defined( 'ABSPATH' ) || exit;

global $product;

do_action( 'woocommerce_before_single_product' ); 
?>

<section class="max-w-screen-xl flex justify-center product__container">
    <div id="product-<?php the_ID(); ?>" class="flex flex-wrap pb-2 lg:py-8 gap-x-8 lg:px-8">
        <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
        <div class="flex flex-col lg:max-w-sm xl:max-w-md 2xl:max-w-lg px-4 lg:px-0">
            <?php do_action( 'woocommerce_single_product_summary' ); ?>
        </div>
        <div class="flex flex-col mt-4 max-w-screen-lg px-4 lg:px-0">
            <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
        </div>
    </div>
</section>
<?php do_action( 'woocommerce_after_single_product' ); ?>