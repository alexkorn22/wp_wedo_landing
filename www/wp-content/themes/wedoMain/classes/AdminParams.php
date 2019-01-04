<?php

/**
 * Class AdminParams
 * @property string botToken
 * @property string tgChatId
 * @property string mailAlerts
 */
class AdminParams
{
    protected $options = [];

    public function __construct()
    {
        $this->options = get_option('true_options');
    }

    public function __get($name)
    {
        if (isset($this->options[$name])) {
            return $this->options[$name];
        }
        return null;
    }

}