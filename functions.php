<?php
define('TD', get_template_directory_uri());

/*insert menu*/
add_action('after_setup_theme', 'register_my_menus');
function register_my_menus(){
    register_nav_menus(array(
        'primary' => 'منوی اصلی', // نام محل فهرست
    ));
}
add_action('after_setup_theme','widget_setup_for_theme');
function widget_setup_for_theme(){
    add_theme_support('widgets');
    add_theme_support('post_thumbnail');
}
add_action('widgets_init','register_my_theme_widgets');
function register_my_theme_widgets(){
    register_sidebar([
        'name'=>'footer col_1',
        'id'=>'footer_col_1',
        'before_widget'=>'<div class="footer_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer_widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name'=>'footer col_2',
        'id'=>'footer_col_2',
        'before_widget'=>'<div class="footer_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer_widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name'=>'footer col_3',
        'id'=>'footer_col_3',
        'before_widget'=>'<div class="footer_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer_widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name'=>'footer col_4',
        'id'=>'footer_col_4',
        'before_widget'=>'<div class="footer_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer_widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name'=>'sidebar col_4',
        'id'=>'sidebar_col_4',
        'before_widget'=>'<div class="sidebar_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar_widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name'=>'page sidebar col_4',
        'id'=>'page_sidebar_col_4',
        'before_widget'=>'<div class="page_sidebar_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="page_sidebar_widget-title">',
        'after_title' => '</h3>',
    ]);
}
/**** creating a menu and sub-menu **********/
add_action('admin_menu','add_custom_menu');
function add_custom_menu(){
    add_menu_page('تنظیمات قالب','تنظیمات قالب','manage_options','theme_setting','setting_theme_function','dashicons-admin-tools',12);
    add_submenu_page('theme_setting','استایل های قالب','استایل های قالب','manage_options','theme_styles','styles_theme_function');
}
function setting_theme_function(){
    include 'theme-seting/setting.php';
}
function styles_theme_function(){
    include 'theme-seting/theme-styles.php';
}