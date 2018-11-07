<?php

function notifications_sc_add_admin_menu()
{

    add_options_page(__('Notifications For ServerChan', 'notifications-for-serverchan'), __('Notifications For ServerChan', 'notifications-for-serverchan'), 'manage_options', 'notifications_for_serverchan', 'notifications_sc_options_page');

}

function notifications_sc_settings_intro_section_callback()
{

    echo __('ServerChan is a tools can send message from web to wechat， you can use it to notify yourself.', 'notifications-for-serverchan');

}

function notifications_sc_settings_webhook_section_callback()
{
    echo __('Copy the SCKEY From <a href="http: //sc.ftqq.com/?c=code
">http://sc.ftqq.com/?c=code</a> ，and paste it below.', 'notifications-for-serverchan');

}

function notifications_sc_options_event_intro_section_callback(){
	echo __('Enable The event you need.', 'notifications-for-serverchan');

}


function notifications_sc_options_page()
{

    ?>
    <form action='options.php' method='post'>

        <h2><?php _e('Notifications For ServerChan', 'notifications-for-serverchan');?></h2>

        <?php
settings_fields('notifications_sc_options_page');
    do_settings_sections('notifications_sc_options_page');
    submit_button();
    ?>

    </form>
    <?php

}

?>