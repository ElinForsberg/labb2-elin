<?php

// Denna tar bort antalet produkter på startsidan
add_action('after_setup_theme', 'my_remove_function', 99 );

function my_remove_function() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
}

// Här lägger jag till en liten slogan för min sportaffär
add_action('woocommerce_archive_description', 'best_shop');

function best_shop(){
    echo '<h4>Välkommen till världens bästa sportshop!!</h4>';
}

add_filter('woocommerce_checkout_fields', 'kassa_funktion');

// Här testade jag under lektionen att ändra texten i beställningsanteckningar

function kassa_funktion($fields){
    $fields['order']['order_comments']['placeholder'] = 'Valfria beställningsanteckningar...';
    return $fields;
}

?>

