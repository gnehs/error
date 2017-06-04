<?php
/*
    自訂顏色
    因為 CSS 很ㄎㄧㄤ 所以直接開放自訂顏色 OuO 超讚的
*/
function owo_register_theme_customizer( $wp_customize ) {
 
    $wp_customize->add_setting(
        'bg_color',
        array(
            'default'     => '#ff3535'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bg_color',
            array(
                'label'      => __( '主體顏色', 'owo' ),
                'section'    => 'colors',
                'settings'   => 'bg_color'
            )
        )
    );
 
}
add_action( 'customize_register', 'owo_register_theme_customizer' );
function ouo_customizer_css() {
    ?>
    <style type="text/css">
        #box { background-color: <?php echo get_theme_mod( 'bg_color' ); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'ouo_customizer_css' );
?>