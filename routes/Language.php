<?php

class Language{
    public $value = 'ua';

    public function __construct(string $value='ua'){
        $value = strip_tags($value);

        if(in_array($value,Config::$languages))
            $this->value = $value;
    }

    public function set_cookie(){
        setcookie('language',$this->value);
        $_COOKIE['language'] = $this->value;
    }

    public function next_language(){
        $count = count(Config::$languages);
        $index = array_search($this->value,Config::$languages) + 1;

        if($index == $count)
            $index = 0;

        $this->value = Config::$languages[$index];
        return $this->value;
    }
    public static function get_current_language(){
        return $_COOKIE['language']??'ua';
    }
}
?>