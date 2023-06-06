<?php
add_action('admin_menu' , 'add_setting_menu');
function add_setting_menu(){
    add_menu_page('Wiki Setting' , 'Wiki Setting' , 'manage_options' , 'theme_setting' , 'setting_menu_content' , 'dashicons-admin-generic' , 6);
    add_submenu_page('theme_setting' , 'Plugin Setting' ,'Plugin Setting' , 'manage_options' , 'plugin_setting' , 'plugin_setting');
}
function my_admin_style() {
    wp_enqueue_style( 'wiki_admin_style', get_template_directory_uri() . '/setting/css/setting_style.css' );
    wp_enqueue_script( 'wiki_setting_js', get_template_directory_uri() . '/setting/js/wiki_setting.js',false, false, true);

}
add_action( 'admin_enqueue_scripts', 'my_admin_style');

function setting_menu_content(){
    get_template_part('setting/general');
}
function plugin_setting(){
    get_template_part('setting/setting');
}
//function social_media(){
//    get_template_part('theme-setting/content/social_media');
//}
//function notification(){
//    get_template_part('theme-setting/content/notification');
//}
//function header_setting(){
//    get_template_part('theme-setting/content/header_setting');
//}
//function typography_file(){
//    get_template_part('theme-setting/content/typographi');
//}
