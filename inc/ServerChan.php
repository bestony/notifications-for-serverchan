<?php

class ServerChan
{
    protected $method = 'POST';
    protected $options;
    protected $base_url = 'https://sc.ftqq.com/%s.send?text=%s&desp=%s'; // API Endpoint of ServerChan

    public function __construct()
    {
        $this->options = get_option('notifications_sc_settings');
    }
    public function request(string $text, string $desp)
    {
        $url = sprintf($this->base_url, $this->options['notifications_sc_sckey'],urlencode($text),urlencode($desp));
		wp_remote_get($url);
    }
}
