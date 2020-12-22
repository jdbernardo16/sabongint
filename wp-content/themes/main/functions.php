<?php

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
	array(
		'top-left' => 'Top Left Location',
		'top-right' => 'Top right Location',
		'mobile-menu' => 'Mobile Menu',
		'privacy' => 'Privacy Policy',
		'terms' => 'Terms & Conditions',
	)
);

add_action('init', 'init_remove_support',100);
function init_remove_support()
{
   $post_type = 'your post type';
   remove_post_type_support( $post_type, 'editor');
}

@ini_set( 'upload_max_size' , '10M' );
@ini_set( 'post_max_size', '10M');

// add_action('wp_ajax_inquiry', 'inquiry_form');
// add_action('wp_ajax_nopriv_inquiry', 'inquiry_form');

// function inquiry_form() {

// 	$formdata = [];
// 	wp_parse_str($_POST['inquiry'], $formdata);

// 	//Admin email

// 	$admin_email = get_option('admin_email');

// 	//Email Headers

// 	$headers[] = 'Content-Type: text/html; charset=UTF-8';
// 	$headers[] = 'From: Sabong International<' . $admin_email . '>';
// 	$headers[] = 'Reply-to:' . $formdata['email'];

// 	//who are we sending the email to?
// 	$to = $admin_email;

// 	// Subject

// 	$subject = "Inquiry from " . $formdata['fullname'];

// 	// Message

// 	$message = '';

// 	foreach($formdata as $index => $field) {
// 		$message .= '<strong>' . $index . '</strong>: ' . $field . '<br />';
// 	}

// 	try {
// 		if( wp_mail($to, $subject, $message, $headers) ) {
// 			wp_send_json_success('Email sent');
// 		}

// 		else {
// 			wp_send_json_error('Email error');
// 		}
// 	} catch( Exception $e) {
// 		wp_send_json_error($e->getMessage());
// 	}

// 	wp_send_json_success( $formdata['fullname'] );
// }
