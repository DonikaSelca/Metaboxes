<?php
  function practice-theme-1_metaboxes_admin_scripts(){
    global $pagenow;
    if($pagenow !== 'post.php') return;
    wp_enqueue_script( 'practice-theme-1-metaboxes-admin-scripts', plugins_url(
    'practice-theme-1-metaboxes/dist/assets/js/admin.js'), array('jquery'), '1.0.0' , true);

    wp_enqueue_style( 'practice-theme-1-metaboxes-admin-stylesheet', plugins_url(
    'practice-theme-1-metaboxes/dist/assets/css/admin.css'), array(), '1.0.0', 'all');
  }
  add_action( 'admin_enqueue_scripts', 'practice-theme-1_metaboxes_admin_scripts');
?>
