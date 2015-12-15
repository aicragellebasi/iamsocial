<?php
/**
 * Set up the IAMSocial theme options
 *
 * @since 1.0.0
 */



/*****************************
WP Theme Check Recommendations
******************************/
$customHeaderArgs = array(
    'flex-width'    => true,
    'width'         => 300,
    'flex-height'    => true,
    'height'        => 180,
    'default-image' => '',
);
add_theme_support( 'custom-header', $customHeaderArgs );

$customBgArgs = array(
    'default-color' => 'FFFFFF'
);
add_theme_support( 'custom-background', $customBgArgs );

/*  This loads a nicer fonts and styles for the WYSIWYG editor
    http://codex.wordpress.org/Function_Reference/add_editor_style
*/
function iamsocial_add_editor_styles() {
    add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'after_setup_theme', 'iamsocial_add_editor_styles' );

/* END WP Theme Check Recommendations */

?>