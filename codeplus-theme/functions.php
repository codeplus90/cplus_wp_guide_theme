<?php

add_theme_support( 'custom-header' );

function register_my_menu() {
                        register_nav_menu('primary',__( 'Primary menu' ));
}
add_action( 'init', 'register_my_menu' );

?>
