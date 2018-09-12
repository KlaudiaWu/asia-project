<?php
ini_set('error_reporting', E_ALL);
define('PAGE_ROOT', dirname(__FILE__));

// pl-PL
// en_US

class Translator {
    private $_fileEn = PAGE_ROOT . DIRECTORY_SEPARATOR . 'translation_en';

    function __construct() {
        $this->_lang = array_key_exists('en', $_GET);;
        $this->_translation = [];
        $this->mode = 'translate';

        if(!file_exists($this->_fileEn)) {
           $this->mode = 'write';  
        }
        else {
            $this->_translation = json_decode(file_get_contents($this->_fileEn), true);
        }
    }

    function __destruct() {
        if($this->mode == 'write') {
            file_put_contents($this->_fileEn, json_encode($this->_translation, JSON_PRETTY_PRINT));
        }
    }

    function __($text) {
        if($this->mode == 'translate') {
            if(!empty($this->_translation[$text]) && $this->_lang) {
                echo $this->_translation[$text];
            }
            else {
                echo $text;
            }
        }
        elseif($this->mode == 'write') {
            $this->_translation[$text] = '';
            echo $text; 
        }       
    }
}



?>