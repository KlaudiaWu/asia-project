<?php
ini_set('error_reporting', E_ALL);

// pl-PL
// en_US

class Translator {
    private $_fileEn;
    private $_lang;
    private $_translation = [];

    function __construct($file) {
        $this->_fileEn = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'translations' . DIRECTORY_SEPARATOR . "en_$file";
        $this->mode = 'translate';

        if(!file_exists($this->_fileEn)) {
           $this->mode = 'write';  
        }
        else {
            $this->_translation = json_decode(
                file_get_contents($this->_fileEn), 
                true
            );
        }
    }

    function __destruct() {
        if($this->mode == 'write') {
            file_put_contents(
                $this->_fileEn, 
                json_encode(
                    $this->_translation, 
                    JSON_PRETTY_PRINT
                )
            );
        }
    }

    function __($text) {
        $translated = $text;
        if($this->mode == 'translate') {
            if(!empty($this->_translation[$text]) && $this->_getLanguage()) {
                $translated = $this->_translation[$text];
            }
        }
        elseif($this->mode == 'write') {
            $this->_translation[$text] = '';
        }
        echo $translated;       
    }

    function _getLanguage() {
        if(empty($this->_lang)) {
            $this->_lang = array_key_exists('en', $_GET);
        }
        return $this->_lang;
    }

    function getLanguage() {
        if($this->_getLanguage()) {
            return 'en_US';
        }
        return 'pl-PL';
    }

    function getData() {
        switch($this->getLanguage()) {
            case 'en_US': 
                $data = array(
                    'url' => '',
                    'class' => 'en',
                    'icon' => 'img/pl.svg'
                ); break;
            case 'pl-PL':
                $data = array(
                    'url' => '?en',
                    'class' => 'en',
                    'icon' => 'img/en.svg'
                ); break;
        }
        return $data;
    }
}



?>