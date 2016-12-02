<?php
/*
Template Name: Kosongan
//cek apakah user sudah login apa belum
 */
echo get_current_user_id();
$current_user = wp_get_current_user();
echo $current_user->user_login;
echo 'Username: ' . $current_user->user_login . '<br />';
echo 'User email: ' . $current_user->user_email . '<br />';
echo 'User first name: ' . $current_user->user_firstname . '<br />';
echo 'User last name: ' . $current_user->user_lastname . '<br />';
echo 'User display name: ' . $current_user->display_name . '<br />';
echo 'User ID: ' . $current_user->ID . '<br />';
?>