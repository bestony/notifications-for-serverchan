<?php
add_action('user_register', 'notifications_sc_user_register');
function notifications_sc_user_register($user_id)
{
	$api = new ServerChan();
    $options = get_option('notifications_sc_settings');
    if ($options['notifications_sc_user_register']) {
       $api->request('New User Register','User ID:'.$user_id);
    }
}
