<?php
add_action('after_set_up_theme', 'my_remove_function', 99 );

function my_remove_function() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
}


add_action('woocommerce_archive_description', 'best_shop');

function best_shop(){
    echo '<h4>Välkommen till världens bästa sportshop!!</h4>';
}

?>

