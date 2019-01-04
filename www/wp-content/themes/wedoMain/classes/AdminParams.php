<?php

/**
 * Class AdminParams
 * @property string botToken
 * @property string tgChatId
 * @property string mailAlerts
 * @property string phones
 */
class AdminParams
{
    protected $options = [];
    protected $arPhones;

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

    public function getArPhones()
    {
        if (!empty($this->arPhones)) {
            return $this->arPhones;
        }
        $this->arPhones = [];
        $arPhones = explode(',', $this->phones);
        foreach ($arPhones as $phone) {
            $this->arPhones[]['phone'] = $phone;
        }
        return $this->arPhones;
    }

}

