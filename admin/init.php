<?php
include_once 'sections.php';
add_action('admin_menu', 'notifications_sc_add_admin_menu');
add_action('admin_init', 'notifications_sc_settings_init');

function notifications_sc_settings_init()
{

    register_setting('notifications_sc_options_page', 'notifications_sc_settings');

    add_settings_section(
        'notifications_sc_options_intro_section',
        __('ServerChan Introduce', 'notifications-for-serverchan'),
        'notifications_sc_settings_intro_section_callback',
        'notifications_sc_options_page'
    );
    add_settings_section(
        'notifications_sc_options_webhook_section',
        __('SCKey Settings', 'notifications-for-serverchan'),
        'notifications_sc_settings_webhook_section_callback',
        'notifications_sc_options_page'
    );

    add_settings_field(
        'notifications_sc_sckey',
        __('SCKey', 'notifications-for-serverchan'),
        'notifications_sc_sckey_render',
        'notifications_sc_options_page',
        'notifications_sc_options_webhook_section'
    );
    add_settings_section(
        'notifications_sc_options_event_intro_section',
        __('Event Introduce', 'notifications-for-serverchan'),
        'notifications_sc_options_event_intro_section_callback',
        'notifications_sc_options_page'
    );

    add_settings_field(
        'notifications_sc_user_register',
        __('User Event: Register', 'notifications-for-serverchan'),
        'notifications_sc_user_register_render',
        'notifications_sc_options_page',
        'notifications_sc_options_event_intro_section'
    );

}

function notifications_sc_sckey_render()
{

    $options = get_option('notifications_sc_settings');
    ?>
    <input type='text' name='notifications_sc_settings[notifications_sc_sckey]' value='<?php echo $options['notifications_sc_sckey']; ?>'>
    <?php

}

function notifications_sc_user_register_render()
{

    $options = get_option('notifications_sc_settings');
    ?>
    <input type='checkbox' name='notifications_sc_settings[notifications_sc_user_register]' <?php checked($options['notifications_sc_user_register'], 1);?> value='1'>
    <?php

}
