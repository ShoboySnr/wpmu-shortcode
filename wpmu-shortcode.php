<?php
/*
Plugin Name: Subscription Form Shortcode
Plugin URI: https://github.com/ShoboySnr/wpmu-shortcode
Description: Display subscription form
Version: 1.0.0
Author: Damilare Shobowale
Contributors: Damilare Shobowale
Author URI: https://github.com/ShoboySnr
License: GPL2
*/

function subform() {
    
    // Get the current user's display name
    $user_display_name = wp_get_current_user()->user_firstname;
    
    // Get the blog name
    $blog_name = get_bloginfo( 'name' );
    
    // Display the welcome message and subscription form
    echo '<p>Hey ' . $user_display_name . ', welcome to ' . $blog_name . '! You can subscribe to our newsletter here:</p>';
    ?>
    <form action="/thank-you">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Submit">
    </form>
    <?php
}
add_shortcode( 'subscriptionform', 'subform' );